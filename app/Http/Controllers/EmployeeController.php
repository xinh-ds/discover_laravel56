<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use DB;
use Illuminate\Support\Collection;

class EmployeeController extends Controller
{
    /**
     * Get list employee
     *
     * @return Response
     */
    public function index(Request $request)
    {
        switch ($request->type) {
            case 'eloquent':
                return $this->handleEloquentBuilder();
            case 'builder':
                return $this->handleQueryBuilder();
            default:
                return $this->handleCollection();
        }
    }

    private function handleEloquentBuilder()
    {
        $employees = Employee::all();
        // $employees = Employee::all()->toArray();
        $this->generalHandle($employees);
    }

    private function handleQueryBuilder()
    {
        $employees = DB::table('employees')->get()->avg('salary');
        // $employees = DB::table('employees')->get()->toArray();
        $this->generalHandle($employees);
    }


    private function handleCollection()
    {


        $employees = [
            ['name' => 'Nguyễn Đức Hạnh', 'age' => 30, 'salary' => 1000],
            ['name' => 'Nguyễn Đức Xinh', 'age' => 40, 'salary' => 2000],
            ['name' => 'Nguyễn Đức Kiên', 'age' => 20, 'salary' => 3000]
        ];
        // collect($employees)->dd();
        die((collect($employees)));


        $collection->sortBy('age');
        return $collection->sortBy('age')->toArray();



        dd($collection->toArray());

        $employeeOver29 = collect($employees)->filter(function ($item, $index) {
            return $item['age'] >= 30;
        });

        dd($employeeOver29->toArray());


        $cities = [
            ['id' => 1, 'name' => 'Đà Nẵng', 'population' => 2000000],
            ['id' => 2, 'name' => 'Hà Nội', 'population' => 7000000],
            ['id' => 3, 'name' => 'Nha Trang', 'population' => 3000000],
            ['id' => 4, 'name' => 'Quảng Nam', 'population' => 4000000],
        ];
        $collection = collect($cities);
        

        $collect = collect([]);

        
        if ($collect->isEmpty()) var_dump('empty'); else var_dump('not empty');
        // empty
        exit();


        print_r($cities);
        dd($cities);
        return;
        return var_dump($cities);

        /*
            

         */



        dd($cities);

        return view('user', compact('cities'));


 
        $employees = [
            ['name' => 'Nguyễn Đức Hạnh', 'age' => 20, 'salary' => 1000],
            ['name' => 'Nguyễn Đức Xinh', 'age' => 30, 'salary' => 2000],
            ['name' => 'Nguyễn Đức Kiên', 'age' => 30, 'salary' => 3000]
        ];
        $a = collect($employees);
        $b = Collection::make($employees);
        $c = new Collection($employees);

       



        dd($a == $b, $b == $c);
        $collect = collect([]);

        // if ($collect)          var_dump('true');    else var_dump('false');      echo "<br>";
        // if (empty($collect))   var_dump('empty');   else var_dump('not empty');  echo "<br>";
        // if (is_null($collect)) var_dump('null');    else var_dump('not null');   echo "<br>";
        // if (isset($collect))   var_dump('isset');   else var_dump('not isset');  echo "<br>";



        if ($collect->isEmpty()) var_dump('empty'); else var_dump('not empty');
        // empty
        die();


        return;

        // 2500
        // return $this->calculateAvg($employees, 'salary');

        // return collect($employees)->filter(function ($item, $index) {
        //     return $item['age'] >= 30;
        // })->avg(function ($item) {
        //     return $item['salary'];
        // });
        
        dd($data);



        return collect($employees)->avg(function($item){
            return $item['salary'] * 1.5;
        });



        $this->generalHandle($data);
    }

    private function generalHandle($result)
    {
        dd($result);
    }
}
