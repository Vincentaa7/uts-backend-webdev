<?php
require_once __DIR__ . '/../Model/Purchases.php';

class PurchaseController {
    private $purchaseModel;

    public function __construct() {
        $this->purchaseModel = new Purchases();
    }
// Method untuk Mengambil semua baris data Purchase.
    public function getAllPurchases() {
        $purchases = $this->purchaseModel->getAllPurchases();
        return $purchases;
    }
//  Method untuk mengambil satu baris data Purchase berdasarkan nomor ID data.
    public function getPurchaseById($purchaseId) {
        $purchase = $this->purchaseModel->getPurchaseById($purchaseId);
        return $purchase;
    }
// Method Menginputkan satu baris data Purchase.
    public function addPurchase($data) {
        $this->purchaseModel->addPurchase($data);
        return "Pembelian berhasil ditambahkan";
    }
// Method untuk memperbarui (update) satu baris data Purchase berdasarkan nomor ID data.
    public function updatePurchase($purchaseId, $data) {
        $this->purchaseModel->updatePurchase($purchaseId, $data);
        return "Pembelian berhasil diperbarui";
    }
// Method untuk menghapus satu baris data Purchase berdasarkan nomor ID data.
    public function deletePurchase($purchaseId) {
        $this->purchaseModel->deletePurchase($purchaseId);
        return "Pembelian berhasil dihapus";
    }
}
?>
