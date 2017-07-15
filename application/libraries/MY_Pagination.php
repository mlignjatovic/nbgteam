<?php

class MY_Pagination extends CI_Pagination {

    public function setOffset($page,$perPage) {
        return ($page > 1) ? ($page * $perPage) - $perPage : 0;
    }
}
