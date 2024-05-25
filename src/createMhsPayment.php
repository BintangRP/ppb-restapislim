<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;



return function (App $app) {
    $container = $app->getContainer();

    $app->post("/mahasiswa/edit", function (Request $request, Response $response) use ($container) {
        $add_mahasiswa = $request->getParsedBody();
        $nim = $add_mahasiswa["nim"];
        $nama = $add_mahasiswa["nama"];
        $jk = $add_mahasiswa["jk"];
        $umur = $add_mahasiswa["umur"];
        $sql = "INSERT INTO mahasiswa(nim, nama, jk, umur) VALUES
                ($nim, '$nama', '$jk', $umur)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $container->get('rendered')->render($response->withJson(["status" => "succes", "data" => "1"], 200), 'index.phtml');
    });
};
