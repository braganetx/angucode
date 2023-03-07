pessoas.factory("PessoasSrv", function ($http, $resource) {
	var baseUrl = "http://localhost/sisgestorv2/";

	return $resource(
		baseUrl + "contato/:id",
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
				url: baseUrl + "contato/create",
			},
			update: {
				method: "PUT",
				url: baseUrl + "contato/update/:id",
			},
			remove: {
				method: "DELETE",
				url: baseUrl + "contato/delete/:id",
			},
		}
	);
});
