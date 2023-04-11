<?php
namespace App\Http\Controllers;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class ExpenseController extends Controller
{
    public function show(){
    
        $Expenses = Expense::get();
        //$expense= DB::table('expense')->get();
        return view('expenses',compact('Expenses'));
    }

    public function store(Request $request){
        $Expenses = new Expense();
        $Expense->Item = $request->Expense_Item;
        $Expense->Item_category = $request->Expense_Item_category;
        $Expense->purchase_date = $request->Expense_purchase_date;
        $Expense->Amount = $request->Expense_Amount;
        $Expense->save();
        $action=0;
        return redirect()->back()->with('action');
    }

    public function distroy($id){
        
        DB::table('Expenses')->where('id',$id)->delete();
        return redirect()->back();
    }

    public function goingToTheUpdate($id){
        //update/{id}
        $Expenses=Expense::where('id',$id)->get();
        $action=1;
        return view('create_expenses',compact(['Expenses','action']));
    }

    public function update($id){
        // update/up/{id}
        Expense::where('id',$id)
        ->update([
        'Item'=>$_POST['Expense_Item'],
        'Item_category'=>$_POST['Expense_Item_category'],
        'purchase_date'=>$_POST['Expense_purchase_date'],
        'Amount'=>$_POST['Expense_Amount']
    ]);
        //$product->save();
        $expense = Expense::get();
       // $expenses = DB::table('expense')->get();
        return view('expenses',compact('expenses'));
    }
}


