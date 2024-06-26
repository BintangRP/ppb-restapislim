<?php

use Slim\Http\Request;
use Slim\Http\Response;

$app->get("/mahasiswa/pembayaran", function (Request $request, Response $response) {
    $sql = "SELECT mahasiswa.nim, nama,
                case
                    when jk='L' then 'Laki-Laki'
                    when jk='P' then 'Perempuan'
                end as jenis_kelamin
                , umur,
                ifnull(semester,0) as semester, ifnull(jumlah,0) as jumlah_spp
                FROM mahasiswa LEFT JOIN spp_mahasiswa
                ON mahasiswa.nim=spp_mahasiswa.nim
                WHERE mahasiswa.nim!=0";
    $jk = $request->getQueryParam("jk");
    $umur = $request->getQueryParam("umur");
    if ($jk != null) {
        $sql = $sql . " AND jk='$jk'";
    };
    if ($umur != null) {
        $sql = $sql . " AND umur=$umur";
    };
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $response->withJson(["status" => "succes", "data" => $result])
        ->withHeader('content-type', 'application/json')
        ->withStatus(200);
});
