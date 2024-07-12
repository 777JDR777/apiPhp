<?php
    class Category extends Connect{
        public function getCategory(){
            #instaciamos  la funcion conexion en el objeto connect
            $connect = parent::connection();
            #no se que ahce xD
            parent::setNames();
            #creamos cadenas sql que se va ejecutar en el mysql
            $sql="SELECT * FROM `category` WHERE state=1";
            #preparamos la ejecuion
            $sql=$connect->prepare($sql);
            #lo jecutamos
            $sql->execute();
            # se instancia el resultado de la consulta en un objeto tipo arrya 
            # con la funcion fetchAll y con FECT_ASSOC se hace que se muestro en el json
            #de postman los datos tal cual como estan en l base de datos
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            #luego retorna unresultado
            return $result;
        }

        public function getCategoryId($id){
            #instaciamos  la funcion conexion en el objeto connect
            $connect = parent::connection();
            #no se que ahce xD
            parent::setNames();
            #creamos cadenas sql que se va ejecutar en el mysql
            $sql="SELECT * FROM `category` WHERE state=1 AND id=?";
            #preparamos la ejecuion
            $sql=$connect->prepare($sql);
            #se llama al metodo bind para sustiir el signo de interogacion por el núemro1
            $sql->bindValue(1, $id);
            #lo jecutamos
            $sql->execute();
            # se instancia el resultado de la consulta en un objeto tipo arrya 
            # con la funcion fetchAll y con FECT_ASSOC se hace que se muestro en el json
            #de postman los datos tal cual como estan en l base de datos
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            #luego retorna unresultado
            return $result;
        }

        public function insertCategoryNameDescription($name, $description){
            #instaciamos  la funcion conexion en el objeto connect
            $connect = parent::connection();
            #no se que ahce xD
            parent::setNames();
            #creamos cadenas sql que se va ejecutar en el mysql
            $sql="INSERT INTO category(id,name,description,state) VALUES (NULL,?,?,'1');";
            #preparamos la ejecuion
            $sql=$connect->prepare($sql);
            #se llama al metodo bind para sustiir el signo de interogacion por el núemro1
            $sql->bindValue(1, $name);
            $sql->bindValue(2, $description);
            #lo jecutamos
            $sql->execute();
            # se instancia el resultado de la consulta en un objeto tipo arrya 
            # con la funcion fetchAll y con FECT_ASSOC se hace que se muestro en el json
            #de postman los datos tal cual como estan en l base de datos
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            #luego retorna unresultado
            return $result;
        }

        public function updateCategory($name, $id, $description ){
            #instaciamos  la funcion conexion en el objeto connect
            $connect = parent::connection();
            #no se que ahce xD
            parent::setNames();
            #creamos cadenas sql que se va ejecutar en el mysql
            $sql="UPDATE category set name=?, description=? WHERE id=?";
            #preparamos la ejecuion
            $sql=$connect->prepare($sql);
            #se llama al metodo bind para sustiir el signo de interogacion por el parametro que se le asigne
            #de los numeros de bind value debe ser igual que el orden de la sentencia sql
            $sql->bindValue(3, $id);
            $sql->bindValue(2, $description);
            $sql->bindValue(1, $name);
            #lo jecutamos
            $sql->execute();
            # se instancia el resultado de la consulta en un objeto tipo arrya 
            # con la funcion fetchAll y con FECT_ASSOC se hace que se muestro en el json
            #de postman los datos tal cual como estan en l base de datos
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            #luego retorna unresultado
            return $result;
        }

        public function deleteCategory($id){
            #instaciamos  la funcion conexion en el objeto connect
            $connect = parent::connection();
            #no se que ahce xD
            parent::setNames();
            #creamos cadenas sql que se va ejecutar en el mysql
            $sql="UPDATE category set state=0 WHERE id=?";
            #preparamos la ejecuion
            $sql=$connect->prepare($sql);
            $sql->bindValue(1, $id);
            #lo jecutamos
            $sql->execute();
            # se instancia el resultado de la consulta en un objeto tipo arrya 
            # con la funcion fetchAll y con FECT_ASSOC se hace que se muestro en el json
            #de postman los datos tal cual como estan en l base de datos
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            #luego retorna unresultado
            return $result;
        }
    }




?>