<?php

    namespace App\Models;

    use \App\Core\Functions;

    class Model_Main extends \App\Core\Classes\Models
    {
        public function generate(string $original) : mixed
        {
            $query = $this->connector()->query("SELECT * FROM short_links WHERE original = '" . $original . "';");
            $result = $query->fetch_assoc();
            if($result == NULL) {
                $rand_string = Functions\rand_string();
                $query = $this->connector()->query("INSERT INTO short_links (original, reference, uses) VALUES ('$original', '$rand_string', 0);");
                $query = $this->connector()->query("SELECT * FROM short_links WHERE reference = '$rand_string';");
                return $query->fetch_assoc();
            } else {
                return $result;
            }
        }

        public function get(string $reference) : mixed
        {
            $query = $this->connector()->query("SELECT * FROM short_links WHERE reference = '" . $reference . "';");
            $result = $query->fetch_assoc();
            if($result == NULL) {
                return false;
            } else {
                return $result;
            }
        }

        public function update_clicks(string $reference) : mixed
        {
            $this->connector()->query("UPDATE short_links SET uses = " . $result['uses'] + 1 . " WHERE reference = $reference;");
        }

    }