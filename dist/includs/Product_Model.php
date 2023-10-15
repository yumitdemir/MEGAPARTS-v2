<?php

class Product_Model extends Database
{

    public function addProduct($name, $description, $price, $image_url)
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

    public function getProductById($id)
    {
        $query = "SELECT * FROM products WHERE id=:id";
        $statement = [
            "id" => $id,
        ];
        $result = $this->executeQuery($query, $statement);

        return $result;
    }


    public function deleteProductById($id)
    {
        $query = "DELETE FROM products WHERE id = :id;";
        $statement = [
            "id" => $id,
        ];
        $result = $this->executeQuery($query, $statement);
        return $result;
    }

    public function updateProductById($name, $description, $price, $image_url,$id)
    {
        $query = "UPDATE products SET name=:name, description=:description ,price = :price, description = :description WHERE id = :id";
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