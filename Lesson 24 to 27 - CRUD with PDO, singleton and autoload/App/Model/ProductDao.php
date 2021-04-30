<?php

namespace App\Model;

class ProductDao {
    public function create(Product $product) {
        // ? = bindValue
        $sql  = 'INSERT INTO products (name, description) VALUES (?, ?)';
        $stmt = Connection::getConn()->prepare($sql);

        $stmt->bindValue(1, $product->getName());
        $stmt->bindValue(2, $product->getDescription());
        $stmt->execute();
    }

    public function read() {
        //
    }

    public function update(Product $product) {
        //
    }

    public function delete($id) {
        //
    }
}