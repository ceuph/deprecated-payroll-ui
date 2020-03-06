<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SH09_OTHERDEDUCTIONS".
 *
 * @property string $EmpID
 * @property string $PrdID
 * @property string $FAWU_AF
 * @property string $FAWU_UD
 * @property string $FAWU_WF
 * @property string $HDMF_UPG
 * @property string $HDMF_MPL2
 * @property string $Coop
 * @property string $Tuition
 * @property string $Tour
 * @property string $AlumniTick
 * @property string $ParkingFee
 * @property string $GradExp
 * @property string $TogaRent
 * @property string $StuUniform
 * @property string $Vaccine
 * @property string $OtherDeduc
 * @property string $AdjWTAX
 * @property string $AdjHDMF
 * @property string $AdjPHIC
 * @property string $AdjSSS
 * @property string $OPBasic
 * @property string $OPEFA
 * @property string $OPCOLA
 * @property string $OPBonusXmas
 * @property string $OPBonusMidYr
 * @property string $OPTMP
 * @property string $OPAdvIP
 * @property string $OPAllowIP
 * @property string $OPVLSL
 */
class OtherDeductions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'SH09_OTHERDEDUCTIONS';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EmpID', 'PrdID'], 'required'],
            [['FAWU_AF', 'FAWU_UD', 'FAWU_WF', 'HDMF_UPG', 'HDMF_MPL2', 'Coop', 'Tuition', 'Tour', 'AlumniTick', 'ParkingFee', 'GradExp', 'TogaRent', 'StuUniform', 'Vaccine', 'OtherDeduc', 'AdjWTAX', 'AdjHDMF', 'AdjPHIC', 'AdjSSS', 'OPBasic', 'OPEFA', 'OPCOLA', 'OPBonusXmas', 'OPBonusMidYr', 'OPTMP', 'OPAdvIP', 'OPAllowIP', 'OPVLSL'], 'number'],
            [['PrdID'], 'string', 'max' => 32],
            [['EmpID', 'PrdID'], 'unique', 'targetAttribute' => ['EmpID', 'PrdID']],
        ];
    }

    public function getEmployeeList()
    {
        return $this->hasOne(PayrollEmployeeList::className(), ['EmpID' => 'EmpID']);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'EmpID' => 'Emp ID',
            'PrdID' => 'Prd ID',
            'FAWU_AF'   =>  'FAWU – Agency fee',
            'FAWU_UD'   =>  'FAWU – Union Dues',
            'FAWU_WF'   =>  'FAWU – Welfare Fund',
            'HDMF_UPG'  =>  'Pag-Ibig Updgrade',
            'HDMF_MPL2' =>  'Pag-Ibig Savilgs/ MPL2',
            'Coop'  =>  'Coop',
            'Tuition'   =>  'Tuition',
            'Tour'  =>  'Tour',
            'AlumniTick'    =>  'Alumni Ticket',
            'ParkingFee'    =>  'Parking Fee',
            'GradExp'   =>  'Graduation Expense',
            'TogaRent'  =>  'Toga Rent',
            'StuUniform'    =>  'Student Uniform',
            'Vaccine'   =>  'Vaccine',
            'OtherDeduc'    =>  'Other Deduction',
            'AdjWTAX'   =>  'Adjustment Witholding Tax',
            'AdjHDMF'   =>  'Adjustment HDMF',
            'AdjPHIC'   =>  'Adjustment Philhealth',
            'AdjSSS'    =>  'Adjustment SSS',
            'OPBasic'   =>  'Overpayment Basic',
            'OPEFA' =>  'Overpayment EFA',
            'OPCOLA'    =>  'Overpayment COLA',
            'OPBonusXmas'   =>  'Overpayment Bonus Christmas',
            'OPBonusMidYr'  =>  'Overpayment Bonus Mid Year',
            'OPTMP' =>  'Overpayment Thirteen Month Pay',
            'OPAdvIP'   =>  'Overpayment Advance IP',
            'OPAllowIP' =>  'Overpayment Allowance IP',
            'OPVLSL'    =>  'Overpayment VL SL',

        ];
    }

    public function getPayPeriod()
    {
        return $this->hasOne(PayrollPayPeriodList::className(), ['PrdID' => 'PrdID']);
    }
}
