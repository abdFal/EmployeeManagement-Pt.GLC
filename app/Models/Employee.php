<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = [
        
    ];

    
    /**
     * Get the user that owns the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get all of the salary_slip for the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salary_slip(): HasMany
    {
        return $this->hasMany(SalarySlip::class, 'employee_id', 'id');
    }

    /**
     * Get all of the leave_request for the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function leave_request(): HasMany
    {
        return $this->hasMany(LeaveRequest::class, 'employee_id', 'id');
    }

    /**
     * Get all of the permission for the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function permission(): HasMany
    {
        return $this->hasMany(Permission::class, 'employee_id', 'id');
    }

}
