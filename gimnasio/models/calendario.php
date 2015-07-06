<?php
   
    function getCalendarios($post){
        $c = getConnection();
        $where = '1=1 ';
        
        $profesor = $post["profesor"];
        if($profesor > 0){
            $where .= 'and p.id_profesor='.$profesor;  
        }
        $actividad = $post["actividad"];
                if($actividad > 0){
            $where .= 'and a.id_actividad='.$actividad;  
        }
        $dia = $post["dia"];
        if($dia > 0){
            
        }
        
        
        
        $query = "SELECT a.nombre, p.profesor_nombre_apellido FROM `calendario-profesor-actividad` c  
                            INNER JOIN `profesor-actividad` pa ON pa.id_profesor_actividad = c.id_profesor_actividad
                            INNER JOIN `profesores` p on p.id_profesor = pa.id_profesor
                            INNER JOIN `actividades` a on a.id = pa.id_actividad
                            WHERE $where";
        
        $calendarios = array();
        if( $result = $c->query($query) ){
            while($fila = $result->fetch_assoc()){
                $calendarios[] = $fila;
            }
            $result->free();
        }
        return $calendarios;
    }

    

?>