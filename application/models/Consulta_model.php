<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Consulta_model extends CI_Model {
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    

    function agenda($hoy){
        $condicion = array(
                'Fecha' => $hoy
                );
        $consulta = $this->db->get_where('ag_agenda', $condicion);
        return $consulta;
    }

    function manana($manana){
        $condicion = array(
            'Fecha >=' => $manana
            );

        $consulta = $this->db->get_where('ag_agenda', $condicion);
        return $consulta;
    }

    function verDocs(){
        $this->db->order_by('IdDocumentos', 'DESC');
        $consulta = $this->db->get('bc_documentos');
        return $consulta;
    }

    function buscarDocs($b){
        $condicion = array(
                'Folio' => $b
            );
        
        $this->db->like('Folio', $b);
        $consulta = $this->db->get('bc_documentos');
        return $consulta;
    }

    function buscarAgenda($b){
    
        $condicion = array(
               'Fecha' => $b
           );     

        $consulta = $this->db->get_where('ag_agenda', $condicion);
        return $consulta;
    }
    
    function agregar_agenda($evento, $lugar, $fecha, $hora, $evidencia){
        $condicion = array(
                'Evento'    => $evento,
                'Lugar'     => $lugar, 
                'Fecha'     => $fecha,
                'Hora'      => $hora,
                'Evidencia' => $evidencia
            );
        $this->db->insert('ag_agenda', $condicion);
    }
    function agregarD($folio, $hora, $fechaD, $tramite, $observacion, $quien, $nom_doc){
        $condicion = array(
                'Folio' => $folio,
                'Hora' => $hora,
                'Fecha' => $fechaD, 
                'Tramite' => $tramite,
                'Observacion' => $observacion,
                'IdArea' => $quien, 
                'Doc'   => $nom_doc
            );

        $this->db->insert('bc_documentos', $condicion);
    }
    function areas(){
        $this->db->order_by('Area');
        $consulta = $this->db->get('ab_areas');
        return $consulta;
    }

}
?>