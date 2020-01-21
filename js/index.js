import React from 'react';
import ReactDOM from 'react-dom';

import EmployeeTable from "./employee/EmployeeTable";
import EmployeeDetail from "./employee/EmployeeDetail";

import Employee from "./employee/Employee";

const payroll = document.getElementById('payroll');
if (null !== payroll) {
    let employees = [
        new Employee('4049-4', 'Chua', 'Joey'),
        new Employee('5046-7', 'Natino', 'Czarina Mitz'),
    ];
    let employee = null;
    let employeeComponent = null;

    let employeeSelected = function (e) {
        console.log(e);
        employee = e;

        ReactDOM.render(employeeComponent, payroll);
    };

    employeeComponent = <div className="row">
        <EmployeeTable colClass="col-xs-12 col-lg-6" tableClass="table table-striped table-hover"
                       employees={employees} onEmployeeClick={employeeSelected} />
        <EmployeeDetail employee={employee}/>
    </div>;

    ReactDOM.render(employeeComponent, payroll);
}