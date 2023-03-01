pessoas.factory("PessoasSrv", function ($http, $resource) {
  var baseUrl = "http://localhost:8000/public/";

  /*
  var _getPessoas = function () {
    return $http.get("bekend/contatos.php");
  };
  var _getPessoa = function () {
    return $http.get("bekend/contatos.php?id=:id");
  };
  var _savePessoa = function () {
    return $resource.post("bekend/addContatos.php");
  };
  

	return {
		getPessoas: _getPessoas,
		getPessoa: _getPessoa,
		savePessoa: _savePessoa,
		id: "@id",
	};
*/

  return $resource(
    baseUrl + "contato?id=:id",
    { id: "@id" },
    {
      update: {
        method: "PUT",
        url: baseUrl + "contato/update?id=:id",
      },
      remove: {
        method: "DELETE",
        url: baseUrl + "contato/delete?id=:id",
      },
    }
  );
});