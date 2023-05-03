<?php
require_once 'db_connection.php';

class info {
    function get_info() {
        global $conn;
        $sql = "SELECT * FROM products";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $info = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $info[] = $row;
            }
            return $info;
        } else {
            return false;
        }
    }

    function get_product($product_id) {
        global $conn;
        $sql = "SELECT * FROM products WHERE id = '$product_id'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            $product = mysqli_fetch_assoc($result);
            return $product;
        } else {
            return false;
        }
    }
}

class Users {
    function get_user($user_id) {
        global $conn;
        $sql = "SELECT * FROM users WHERE id = '$user_id'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            return $user;
        } else {
            return false;
        }
    }
}

class Orders {
    function add_order($user_id, $product_id) {
        global $conn;
        $sql = "INSERT INTO orders (user_id, product_id) VALUES ('$user_id', '$product_id')";
        if (mysqli_query($conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    function get_orders() {
        global $conn;
        $sql = "SELECT * FROM orders";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $orders = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $orders[] = $row;
            }
            return $orders;
        } else {
            return false;
        }
    }
}
?>
