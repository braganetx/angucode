pessoas.factory("OperadoraSrv", function ($http, $resource) {
	var baseUrl = "http://localhost/sisgestorv2/";

	return $resource(
		baseUrl + "operadora/:id",
		{
			id: "@id",
		},
		{
			query: {
				method: "GET",
				isArray: true,
			},
			insert: {
				method: "POST",
				url: baseUrl + "operadora/create",
			},
			update: {
				method: "PUT",
				url: baseUrl + "operadora/update/:id",
			},
			remove: {
				method: "DELETE",
				url: baseUrl + "operadora/delete/:id",
			},
		}
	);
});
