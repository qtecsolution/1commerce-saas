<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderFormAdditionalField;

class DynamicOrderFormController extends Controller
{
    public function addInputField(Request $request)
    {
        $field = new OrderFormAdditionalField();
        $field->user_template_id = $request->user_template_id;
        $field->title = $request->title;
        $field->name = $request->name;
        $field->type = $request->type;
        $field->is_required = $request->is_required;
        $field->options = $request->options;
        $field->save();

        return response()->json(['success' => true, 'field' => $field]);
    }

    public function deleteInputField(Request $request)
    {
        $field = OrderFormAdditionalField::find($request->id);
        $field->delete();
        return response()->json(['success' => true]);
    }

    public function updateInputField(Request $request)
    {
        $field = OrderFormAdditionalField::find($request->id);
        $field->title = $request->title;
        $field->name = $request->name;
        $field->type = $request->type;
        $field->is_required = $request->is_required;
        $field->options = $request->options;
        if ($field->type != 'select' && $field->type != 'radio' && $field->type != 'checkbox') {
            $field->options = null;
        }
        $field->save();
        return response()->json(['success' => true, 'field' => $field]);
    }
}
