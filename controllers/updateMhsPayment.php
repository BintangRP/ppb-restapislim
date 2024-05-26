<?php

use Slim\Http\Request;
use Slim\Http\Response;

$app->put("/mahasiswa/edit", function (Request $request, Response $response) {
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

    return $response->withJson(["status" => "succes", "data" => "1"])
        ->withHeader('content-type', 'application/json')
        ->withStatus(200);
});
