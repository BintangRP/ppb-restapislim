<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->delete("/mahasiswa/edit", function (Request $request, Response $response) use ($container) {
        $add_mahasiswa = $request->getParsedBody();
        $nim = $add_mahasiswa["nim"];
        $sql = "DELETE FROM mahasiswa WHERE nim=$nim";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $container->get('rendered')->render($response->withJson(["status" => "succes", "data" => "1"], 200), 'index.phtml');
    });
};
