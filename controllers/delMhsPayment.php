<?php

use Slim\Http\Request;
use Slim\Http\Response;

$app->delete("/mahasiswa/edit", function (Request $request, Response $response) {
    $add_mahasiswa = $request->getParsedBody();
    $nim = $add_mahasiswa["nim"];
    $sql = "DELETE FROM mahasiswa WHERE nim=$nim";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();

    return $response->withJson(["status" => "succes", "data" => "1"])
        ->withHeader('content-type', 'application/json')
        ->withStatus(200);;
});
