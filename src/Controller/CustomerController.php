<?php
require_once __DIR__ . '/../Model/Customers.php';

class CustomerController {
    private $customerModel;

    public function __construct() {
        $this->customerModel = new Customers();
    }
 // Method untuk Mengambil semua baris data Customer.
    public function getAllCustomers() {
        $customers = $this->customerModel->getAllCustomers();
        return $customers;
    }
//  Method untuk mengambil satu baris data Customer berdasarkan nomor ID data.
    public function getCustomerById($customerId) {
        $customer = $this->customerModel->getCustomerById($customerId);
        return $customer;
    }
// Method Menginputkan satu baris data Customer.
    public function addCustomer($data) {
        $this->customerModel->addCustomer($data);
        return "Customer berhasil ditambahkan";
    }
// Method untuk memperbarui (update) satu baris data Customer berdasarkan nomor ID data.
    public function updateCustomer($customerId, $data) {
        $this->customerModel->updateCustomer($customerId, $data);
        return "Customer berhasil diperbarui";
    }
// Method untuk menghapus satu baris data Customer berdasarkan nomor ID data.
    public function deleteCustomer($customerId) {
        $this->customerModel->deleteCustomer($customerId);
        return "Customer berhasil dihapus";
    }
}
?>
