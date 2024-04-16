<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Product;

class UniqueProduct implements Rule
{
    public function passes($attribute, $value)
    {
        if (!is_array($value)) {
            return false;
        }
    
        // Kiểm tra xem có sản phẩm nào trùng tên, màu và size không
        return !Product::where('name', $value['name'])
            ->where('color', $value['color'])
            ->where('size', $value['size'])
            ->exists();
    }

    public function message()
    {
        return 'The product with the same name, color, and size already exists.';
    }
}
