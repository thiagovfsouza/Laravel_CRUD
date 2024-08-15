<?php

namespace App\Http\Controllers;

use App\Models\TestTable;
use Illuminate\Http\Request;

class TestTableController extends Controller
{
    public function index()
    {
        $data = [];

        return view('panel.index', compact('data'));
    }

    public function getData()
    {
        $data = TestTable::orderBy('id', 'asc')->get();
        return response()->json(['data' => $data]);
    }

    public function getItem($id)
    {
        $data = TestTable::find($id);

        if ($data) {
            return response()->json($data);
        } else {
            return response()->json(['message' => 'no data'], 404);
        }
    }

    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:test_table,name',
            'phone_whatsapp' => 'nullable|string|max:15',
            'phone_contact' => 'nullable|string|max:15',
            'cpf' => 'nullable|string|max:14',
            'cep' => 'nullable|string|max:9',
            'know_company' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first('name')
            ]);
        }

        $data = new TestTable();
        $data->name = $request->name;
        $data->phone_whatsapp = $request->phone_whatsapp;
        $data->phone_contact = $request->phone_contact;
        $data->cpf = $request->cpf;
        $data->cep = $request->cep;
        $data->know_company = $request->know_company;

        $data->save();

        return response()->json(['success' => true]);
    }

    public function update(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:test_table,name,' . $request->id,
            'phone_whatsapp' => 'nullable|string|max:15',
            'phone_contact' => 'nullable|string|max:15',
            'cpf' => 'nullable|string|max:14',
            'cep' => 'nullable|string|max:9',
            'know_company' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first('name')
            ]);
        }

        $data = TestTable::find($request->id);

        if ($data) {
            $data->name = $request->name;
            $data->phone_whatsapp = $request->phone_whatsapp;
            $data->phone_contact = $request->phone_contact;
            $data->cpf = $request->cpf;
            $data->cep = $request->cep;
            $data->know_company = $request->know_company;
            $data->updated_at = now();

            $data->save();

            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'message' => trans('messages.Register not found')]);
        }
    }

    public function destroy($id)
    {
        $data = TestTable::find($id);

        if ($data) {
            $data->delete();

            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'message' => trans('messages.Register not found')]);
        }
    }
}
