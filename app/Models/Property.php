<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    use HasFactory;
    protected $guarded = ['id'];

    public function getFeaturedName(){

        return $this->hasOne(Featured::class, 'id', 'featured_id');
    }
    public function getStatusName(){

        return $this->hasOne(Status::class, 'id', 'status_id');
    }
    public function getBedroomNumber(){

        return $this->hasOne(PropertyBedroom::class, 'id', 'bedroom_id');
    }
    public function getBathroomNumber(){

        return $this->hasOne(PropertyBathroom::class, 'id', 'bathroom_id');
    }
    public function getCountroomNumber(){

        return $this->hasOne(PropertyCountroom::class, 'id', 'countroom_id');
    }
    public function getParkingspaceNumber(){

        return $this->hasOne(PropertyParkingspace::class, 'id', 'parkingspace_id');
    }

    public function getAgentProperty(){

        return $this->belongsTo(User::class, 'agent_id', 'id');

    }

    public function getAgentPropertyDetails(){

        return $this->belongsTo(Agent::class, 'agent_id' , 'agent_id');

    }



    public function getImages(){

        return $this->hasMany(ImageProperty::class, 'property_id', 'id');

    }

    public function getAmenity(){
        return $this->hasMany(AmenityProperty::class, 'property_id', 'id');
    }

    public function getExplore(){
        return $this->hasMany(ExploreProperty::class, 'property_id', 'id');
    }
    public function getBedroom(){
        return $this->hasOne(PropertyBedroom::class, 'id', 'bedroom_id');
    }
    public function getBathroom(){
        return $this->hasOne(PropertyBathroom::class, 'id', 'bathroom_id');
    }
    public function getCountroom(){
        return $this->hasOne(PropertyCountroom::class, 'id', 'countroom_id');
    }
    public function getParkingspace(){
        return $this->hasOne(PropertyParkingspace::class, 'id', 'parkingspace_id');
    }


}
