<?php
class Registermodel extends CI_Model
{

    public function loadCountry()
    {
        $country_list = $this->db->select('*')
            ->from('country')
            ->get();
        return $country_list->result();;
    }
    public function loadState($country_id)
    {
        $state_list = $this->db->select('*')
            ->where('country_id', $country_id)
            ->from('state')
            ->get();
        return $state_list->result();
    }
    public function loadCity($state_id)
    {
        $city_list = $this->db->select('*')
            ->where('state_id', $state_id)
            ->from('city')
            ->get();
        return $city_list->result();
    }
}