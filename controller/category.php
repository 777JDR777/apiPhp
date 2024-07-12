<?php
    #especificando que se a traer información por json
    header('Content-Type: application/json');
    require_once("../config/connection.php");
    require_once("../models/category.php");

    $body = json_decode(file_get_contents("php://input"), true);

    #instanciamos la clases categoria en un objeto
    $category = new Category();

    #creacion de servicios
    switch ($_GET["option"]) {
        case 'getAll':
            $data=$category->getCategory();
            echo json_encode($data);
        break;
        case 'getId':
            $data=$category->getCategoryId($body["id"]);
            echo json_encode($data);
        break;
        case 'insertNameDescription':
            $data=$category->insertCategoryNameDescription($body["name"],$body["description"]);
            echo "Insert Correct";
            echo json_encode($data);
        break;
        case 'update':
            #el orden de las variables de body deben ser exactamente igual que el orden de las columnas de la tabla
            $data=$category->updateCategory($body["name"],$body["id"],$body["description"]);
            echo "Update Correct";
            echo json_encode($data);
        break;
        case 'delete':
            #el orden de las variables de body deben ser exactamente igual que el orden de las columnas de la tabla
            $data=$category->deleteCategory($body["id"]);
            echo "Delete Correct in ID: ".$body["id"];
            echo json_encode($data);
        break;
        
        default:
            # code...
            break;
    }





?>