<?php
    require_once("../config/conexion.php");
    require_once("../models/Venta.php");

    $venta = new Venta();

    switch ($_GET["op"]) {
        case "guardaryeditar":
            if (empty($_POST["ven_id"])) {
                $venta->insert_venta($_POST["suc_id"], $_POST["cliente"], $_POST["fecha"], $_POST["monto"]);
            } else {
                $venta->update_venta($_POST["ven_id"], $_POST["suc_id"], $_POST["cliente"], $_POST["fecha"], $_POST["monto"]);
            }
            break;

        case "listar":
            $datos = $venta->get_venta_x_suc_id($_POST["suc_id"]);
            $data = array();
            foreach ($datos as $row) {
                $sub_array = array();
                $sub_array[] = $row["CLIENTE"];
                $sub_array[] = $row["FECHA"];
                $sub_array[] = $row["MONTO"];
                $sub_array[] = '<button type="button" onClick="editar('.$row["VEN_ID"].')" id="'.$row["VEN_ID"].'" class="btn btn-warning btn-icon waves-effect waves-light"><i class="ri-edit-2-line"></i></button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["VEN_ID"].')" id="'.$row["VEN_ID"].'" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-delete-bin-5-line"></i></button>';
                $data[] = $sub_array;
            }

            $results = array(
                "sEcho" => 1,
                "iTotalRecords" => count($data),
                "iTotalDisplayRecords" => count($data),
                "aaData" => $data
            );
            echo json_encode($results);
            break;

        case "mostrar":
            $datos = $venta->get_venta_x_ven_id($_POST["ven_id"]);
            if (is_array($datos) && count($datos) > 0) {
                foreach ($datos as $row) {
                    $output["VEN_ID"] = $row["VEN_ID"];
                    $output["SUC_ID"] = $row["SUC_ID"];
                    $output["CLIENTE"] = $row["CLIENTE"];
                    $output["FECHA"] = $row["FECHA"];
                    $output["MONTO"] = $row["MONTO"];
                }
                echo json_encode($output);
            }
            break;

        case "eliminar":
            $venta->delete_venta($_POST["ven_id"]);
            break;
    }
?>