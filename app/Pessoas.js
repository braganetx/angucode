var pessoas = angular.module("Pessoas", ["ngRoute", "ngResource"]);

pessoas.config([
	"$routeProvider",
	function ($routeProvider) {
		$routeProvider
			.when("/", {
				templateUrl: "app/templates/index.html",
			})
			.when("/novo", {
				templateUrl: "app/templates/novo.html",
			})
			.when("/editar/:id", {
				templateUrl: "app/templates/editar.html",
			});
	},
]);
