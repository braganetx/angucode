var pessoas = angular.module("Pessoas", ["ngRoute", "ngResource"]);

pessoas.config([
	"$routeProvider",
	function ($routeProvider) {
		$routeProvider
			.when("/", {
				templateUrl: "templates/index.html",
			})
			.when("/novo", {
				templateUrl: "templates/novo.html",
			})
			.when("/editar/:id", {
				templateUrl: "templates/editar.html",
			});
	},
]);
