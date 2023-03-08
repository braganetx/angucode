pessoas.controller("PessoasCtrl", [
	"$scope",
	"PessoasSrv",
	"$location",
	"$routeParams",
	function ($scope, PessoasSrv, $location, $routeParams) {
		$scope.load = function () {
			$scope.registros = PessoasSrv.query();
		};

		$scope.clear = function () {
			$scope.item = {};
		};

		$scope.get = function () {
			$scope.item = PessoasSrv.get({ id: $routeParams.id });
		};

		$scope.adicionar = function (item) {
			var postdata = JSON.stringify(item, null, 2);
			$scope.result = PessoasSrv.insert(
				{},
				postdata,
				function (data, status, headers, config) {
					$location.path("/");
				},
				function (data, status, headers, config) {
					console.log("Ocorreu um error: " + data);
					alert("Ocorreu um error: " + data);
				}
			);
		};

		$scope.editar = function (item) {
			var postdata = JSON.stringify(item, null, 2);
			$scope.result = PessoasSrv.update(
				{ id: $routeParams.id },
				postdata,
				function (data, status, headers, config) {
					$location.path("/");
				},
				function (data, status, headers, config) {
					console.log("Ocorreu um error: " + data);
					alert("Ocorreu um error: " + data);
				}
			);
		};

		$scope.deletar = function (id) {
			if (confirm("Deseja realmente remover esse contato?")) {
				PessoasSrv.remove(
					{ id: id },
					id,
					function (data, status, headers, config) {
						$scope.load();
					},
					function (data, status, headers, config) {
						console.log("Ocorreu um error: " + data);
						alert("Ocorreu um error: " + data);
					}
				);
			} else {
				$scope.load();
			}
		};
	},
]);
