import React from 'react';

import EmployeeRow from './EmployeeRow';

export default class EmployeeTable extends React.Component {
    render() {
        return (
            <div className={this.props.colClass}>
                <table className={this.props.tableClass}>
                    <thead>
                    <tr>
                        <th>Emp No</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    {
                        this.props.employees.map((employee) => {
                            return (<EmployeeRow key={employee.empNo} employee={employee}
                                                 onClick={this.props.onEmployeeClick}/>)
                        })
                    }
                    </tbody>
                </table>
            </div>
        );
    }
}