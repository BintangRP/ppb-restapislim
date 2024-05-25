<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->put("/mahasiswa/edit", function (Request $request, Response $response) use ($container) {
        $add_mahasiswa = $request->getParsedBody();
        $nim = $add_mahasiswa["nim"];
        $nama = $add_mahasiswa["nama"];
        $jk = $add_mahasiswa["jk"];
        $umur = $add_mahasiswa["umur"];
        $updatetext = "";
        if ($nama <> null) {
            $updatetext = $updatetext . ", nama='$nama'";
        };
        if ($jk <> null) {
            $updatetext = $updatetext . ", jk='$jk'";
        };
        if ($umur <> null) {
            $updatetext = $updatetext . ", umur=$umur";
        };
        $sql = "UPDATE mahasiswa set nim=$nim" . $updatetext . " where nim=$nim";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $container->get('rendered')->render($response->withJson(["status" => "succes", "data" => "1"], 200), 'index.phtml');
    });
};
