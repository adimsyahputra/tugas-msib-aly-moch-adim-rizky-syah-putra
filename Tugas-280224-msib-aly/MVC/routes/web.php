<?php
$route = isset($_GET['route']) ? $_GET['route'] : 'beranda';

switch ($route) {
    case 'beranda':
        $berandaController = new BerandaController();
        $berandaController->index();
        break;

    case 'detail-peserta':
        $detailPesertaController = new DetailPesertaController();
        $detailPesertaController->index();
        break;

    case 'data_peserta':
        $dataPesertaController = new DataPesertaController();
        $dataPesertaController->index();
        break;

    case 'hapus-peserta':
        $hapusPesertaController = new HapusPesertaController();
        $hapusPesertaController->index();
        break;

    case 'keluar':
        $keluarController = new KeluarController();
        $keluarController->index();
        break;

    case 'login':
        $loginController = new LoginController();
        $loginController->index();
        break;

    default:
        header('Location: index.php?route=beranda');
        exit();
}
?>
