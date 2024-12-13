<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SunoAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_id', 'authorization', 'device_id', 'client_id', 'status'
    ];

    public function addAccount()
    {
        // Load the JSON file
        $jsonFilePath = public_path('website-assets/accounts.json');
        $jsonData = file_get_contents($jsonFilePath);

        // Decode the JSON data
        $accounts = json_decode($jsonData, true);

        // Check if the data is valid
        if (is_array($accounts)) {
            foreach ($accounts as $account) {
                // Insert each account into the database
                if(!self::where('session_id',$account['session_id'] )->exists()){
                    $this->create([
                        'session_id' => $account['session_id'] ?? null,
                        'authorization' => $account['authorization'] ?? null,
                        'device_id' => $account['device_id'] ?? null,
                        'client_id' => $account['client_id'] ?? null,
                        // 'status' => $account['status'] ?? null,
                    ]);
                }

            }
        } else {
            // Handle the error if the JSON is not valid
            throw new \Exception('Invalid JSON data');
        }
    }
}
