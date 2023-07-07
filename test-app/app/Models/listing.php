<?php

namespace App\Models;
class Listing{
    public static function all(){
        return [
        [
            'id' => 1,
            'title' => 'Listing One',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore temporibus quaerat molestiae accusamus doloribus, quam quo nostrum repellat voluptatum consequuntur a repellendus. Maiores laudantium ea illo molestias nemo, dolorum eos incidunt cupiditate delectus cum dolore voluptate numquam, aspernatur dolores tenetur? Quos ut magnam fugit quaerat mollitia aliquam laborum similique. Fuga.'
        ]
        ,
        [
            'id' => 2,
            'title' => 'Listing Two',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore temporibus quaerat molestiae accusamus doloribus, quam quo nostrum repellat voluptatum consequuntur a repellendus. Maiores laudantium ea illo molestias nemo, dolorum eos incidunt cupiditate delectus cum dolore voluptate numquam, aspernatur dolores tenetur? Quos ut magnam fugit quaerat mollitia aliquam laborum similique. Fuga.'
        ]
        ];
    }

  public static function find($id){
    $listings = self::all();
    foreach($listings as $listing){
        if($listing['id'] == $id){
            return $listing;
        }
    }
  }
}
?>