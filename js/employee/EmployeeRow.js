import React from 'react';

export default class EmployeeRow extends React.Component {
    render() {
        return (
            <tr onClick={() => this.props.onClick(this.props.employee)}>
                <td>{this.props.employee.empNo}</td>
                <td>{this.props.employee.lastName}</td>
                <td>{this.props.employee.firstName}</td>
            </tr>
        )
    }
}