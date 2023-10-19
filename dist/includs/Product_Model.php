<?php

class Product_Model extends Database
{

    protected function addProduct($name, $description, $price, $image_url)
    {
        $query = "INSERT INTO products (name, description, price, image_url) VALUES (:name, :description, :price, :image_url)";
        $statement = [
            "name" => $name,
            "description" => $description,
            "price" => $price,
            "image_url" => $image_url
        ];
        $result = $this->executeQuery($query, $statement);
        return $result;
    }

    protected function getProductById($id)
    {
        $query = "SELECT * FROM products WHERE id=:id";
        $statement = [
            "id" => $id,
        ];
        $result = $this->executeQuery($query, $statement);

        return $result;
    }

    protected function getProducts($number_of_products)
    {
        $number_of_products = max(1, (int)$number_of_products);
        $query = "SELECT * FROM products LIMIT $number_of_products";
        $result = $this->executeQuery($query);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }


    protected function deleteProductById($id)
    {
        $query = "DELETE FROM products WHERE id = :id;";
        $statement = [
            "id" => $id,
        ];
        $result = $this->executeQuery($query, $statement);
        return $result;
    }

    protected function updateProductById($name, $description, $price, $image_url, $id)
    {
        $query = "UPDATE products SET name = :name, description = :description, price = :price, image_url = :image_url WHERE id = :id;";
        $statement = [
            "id" => $id,
            "name" => $name,
            "description" => $description,
            "price" => $price,
            "image_url" => $image_url,
        ];
        $result = $this->executeQuery($query, $statement);
        return $result;
    }

}