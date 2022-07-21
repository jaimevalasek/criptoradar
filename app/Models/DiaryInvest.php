<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiaryInvest extends Model
{
    protected $table = 'diary_invests';
    protected $fillable = ['description', 'status', 'public', 'invest_value', 'return_value', 'rating', 'users_id', 'diary_invest_types_id', 'diary_invest_coins_id'];

    public function diaryInvestCoin()
    {
        return $this->belongsTo(DiaryInvestCoins::class, 'diary_invest_coins_id', 'id');
    }

}
