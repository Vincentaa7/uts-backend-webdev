<?php
require_once __DIR__ . '/../Model/Sales.php';

class SalesController {
    private $salesModel;

    public function __construct() {
        $this->salesModel = new Sales();
    }
// Method untuk Mengambil semua baris data Sales.
    public function getAllSales() {
        $sales = $this->salesModel->getAllSales();
        return $sales;
    }
//  Method untuk mengambil satu baris data Sales berdasarkan nomor ID data.
    public function getSalesById($saleId) {
        $sale = $this->salesModel->getSalesById($saleId);
        return $sale;
    }
// Method Menginputkan satu baris data Sales.
    public function addSales($data) {
        $this->salesModel->addSales($data);
        return "Penjualan berhasil ditambahkan";
    }
// Method untuk memperbarui (update) satu baris data Sales berdasarkan nomor ID data.
    public function updateSales($saleId, $data) {
        $this->salesModel->updateSales($saleId, $data);
        return "Penjualan berhasil diperbarui";
    }
// Method untuk menghapus satu baris data Sales berdasarkan nomor ID data.
    public function deleteSales($saleId) {
        $this->salesModel->deleteSales($saleId);
        return "Penjualan berhasil dihapus";
    }
}
?>
