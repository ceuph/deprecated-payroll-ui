import React from 'react';

export default class EmployeeDetail extends React.Component {
    render() {
        return (
            <div className={this.props.colClass}>
                {this.renderEmployee()}
            </div>
        );
    }

    renderEmployee() {
        if (null === this.props || null === this.props.employee) {
            return <span>Select employee...</span>
        } else {
            return (
                <dl>
                    <dt>Emp No:</dt><dd>{this.props.employee.empNo}</dd>
                    <dt>Last Name:</dt><dd>{this.props.employee.lastName}</dd>
                    <dt>First Name:</dt><dd>{this.props.employee.firstName}</dd>
                </dl>
            );
        }
    }
}