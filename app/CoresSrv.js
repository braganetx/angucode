pessoas.factory("CoresSrv", function ($http, $resource) {
	var baseUrl = "http://localhost/sisgestorv2/";

	return $resource(
		baseUrl + "cores/:id",
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
				url: baseUrl + "cores/create",
			},
			update: {
				method: "PUT",
				url: baseUrl + "cores/update/:id",
			},
			remove: {
				method: "DELETE",
				url: baseUrl + "cores/delete/:id",
			},
		}
	);
});
