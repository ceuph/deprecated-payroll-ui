<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SH03_GSLEAVECREDITS".
 *
 * @property string $EmpID
 * @property string $PrdID
 * @property string $LEC_GSVLAdj
 * @property string $LEC_GSVLHAWP
 * @property string $LEC_GSVLRem
 * @property string $LEC_GSVL
 * @property string $LEC_GSOLVLAdj
 * @property string $LEC_GSOLVLHAWP
 * @property string $LEC_GSOLVLRem
 * @property string $LEC_GSOLVL
 * @property string $LEC_GSSLAdj
 * @property string $LEC_GSSLHAWP
 * @property string $LEC_GSSLRem
 * @property string $LEC_GSSL
 * @property string $LEC_GSOLSLAdj
 * @property string $LEC_GSOLSLHAWP
 * @property string $LEC_GSOLSLRem
 * @property string $LEC_GSOLSL
 * @property string $LEC_GSBLAdj
 * @property string $LEC_GSBLHAWP
 * @property string $LEC_GSBLRem
 * @property string $LEC_GSBL
 * @property string $LEC_GSELAdj
 * @property string $LEC_GSELHAWP
 * @property string $LEC_GSELRem
 * @property string $LEC_GSEL
 * @property string $LEC_GSSPLAdj
 * @property string $LEC_GSSPLHAWP
 * @property string $LEC_GSSPLRem
 * @property string $LEC_GSSPL
 * @property string $LEC_GSPLAdj
 * @property string $LEC_GSPLHAWP
 * @property string $LEC_GSPLRem
 * @property string $LEC_GSPL
 * @property string $LEC_GSMLAdj
 * @property string $LEC_GSMLHAWP
 * @property string $LEC_GSMLRem
 * @property string $LEC_GSML
 * @property string $LEC_GSULAdj
 * @property string $LEC_GSULHAWP
 * @property string $LEC_GSULRem
 * @property string $LEC_GSUL
 * @property string $LEC_GSSLWAdj
 * @property string $LEC_GSSLWHAWP
 * @property string $LEC_GSSLWRem
 * @property string $LEC_GSSLW
 * @property string $LEC_GSNLAdj
 * @property string $LEC_GSNLHAWP
 * @property string $LEC_GSNLRem
 * @property string $LEC_GSNL
 * @property string $GSOBLec
 * @property string $GSOBLecRem
 * @property string $LAB_GSVLAdj
 * @property string $LAB_GSVLHAWP
 * @property string $LAB_GSVLRem
 * @property string $LAB_GSVL
 * @property string $LAB_GSOLVLAdj
 * @property string $LAB_GSOLVLHAWP
 * @property string $LAB_GSOLVLRem
 * @property string $LAB_GSOLVL
 * @property string $LAB_GSSLAdj
 * @property string $LAB_GSSLHAWP
 * @property string $LAB_GSSLRem
 * @property string $LAB_GSSL
 * @property string $LAB_GSOLSLAdj
 * @property string $LAB_GSOLSLHAWP
 * @property string $LAB_GSOLSLRem
 * @property string $LAB_GSOLSL
 * @property string $LAB_GSBLAdj
 * @property string $LAB_GSBLHAWP
 * @property string $LAB_GSBLRem
 * @property string $LAB_GSBL
 * @property string $LAB_GSELAdj
 * @property string $LAB_GSELHAWP
 * @property string $LAB_GSELRem
 * @property string $LAB_GSEL
 * @property string $LAB_GSSPLAdj
 * @property string $LAB_GSSPLHAWP
 * @property string $LAB_GSSPLRem
 * @property string $LAB_GSSPL
 * @property string $LAB_GSPLAdj
 * @property string $LAB_GSPLHAWP
 * @property string $LAB_GSPLRem
 * @property string $LAB_GSPL
 * @property string $LAB_GSMLAdj
 * @property string $LAB_GSMLHAWP
 * @property string $LAB_GSMLRem
 * @property string $LAB_GSML
 * @property string $LAB_GSULAdj
 * @property string $LAB_GSULHAWP
 * @property string $LAB_GSULRem
 * @property string $LAB_GSUL
 * @property string $LAB_GSSLWAdj
 * @property string $LAB_GSSLWHAWP
 * @property string $LAB_GSSLWRem
 * @property string $LAB_GSSLW
 * @property string $LAB_GSNLAdj
 * @property string $LAB_GSNLHAWP
 * @property string $LAB_GSNLRem
 * @property string $LAB_GSNL
 * @property string $GSOBLab
 * @property string $GSOBLabRem
 * @property string $CLC_GSVLAdj
 * @property string $CLC_GSVLHAWP
 * @property string $CLC_GSVLRem
 * @property string $CLC_GSVL
 * @property string $CLC_GSOLVLAdj
 * @property string $CLC_GSOLVLHAWP
 * @property string $CLC_GSOLVLRem
 * @property string $CLC_GSOLVL
 * @property string $CLC_GSSLAdj
 * @property string $CLC_GSSLHAWP
 * @property string $CLC_GSSLRem
 * @property string $CLC_GSSL
 * @property string $CLC_GSOLSLAdj
 * @property string $CLC_GSOLSLHAWP
 * @property string $CLC_GSOLSLRem
 * @property string $CLC_GSOLSL
 * @property string $CLC_GSBLAdj
 * @property string $CLC_GSBLHAWP
 * @property string $CLC_GSBLRem
 * @property string $CLC_GSBL
 * @property string $CLC_GSELAdj
 * @property string $CLC_GSELHAWP
 * @property string $CLC_GSELRem
 * @property string $CLC_GSEL
 * @property string $CLC_GSSPLAdj
 * @property string $CLC_GSSPLHAWP
 * @property string $CLC_GSSPLRem
 * @property string $CLC_GSSPL
 * @property string $CLC_GSPLAdj
 * @property string $CLC_GSPLHAWP
 * @property string $CLC_GSPLRem
 * @property string $CLC_GSPL
 * @property string $CLC_GSMLAdj
 * @property string $CLC_GSMLHAWP
 * @property string $CLC_GSMLRem
 * @property string $CLC_GSML
 * @property string $CLC_GSULAdj
 * @property string $CLC_GSULHAWP
 * @property string $CLC_GSULRem
 * @property string $CLC_GSUL
 * @property string $CLC_GSSLWAdj
 * @property string $CLC_GSSLWHAWP
 * @property string $CLC_GSSLWRem
 * @property string $CLC_GSSLW
 * @property string $CLC_GSNLAdj
 * @property string $CLC_GSNLHAWP
 * @property string $CLC_GSNLRem
 * @property string $CLC_GSNL
 * @property string $GSOBClc
 * @property string $GSOBClcRem
 */
class GsLeaveCredits extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'SH03_GSLEAVECREDITS';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EmpID', 'PrdID'], 'required'],
            [['LEC_GSVLAdj', 'LEC_GSVLHAWP', 'LEC_GSVL', 'LEC_GSOLVLAdj', 'LEC_GSOLVLHAWP', 'LEC_GSOLVL', 'LEC_GSSLAdj', 'LEC_GSSLHAWP', 'LEC_GSSL', 'LEC_GSOLSLAdj', 'LEC_GSOLSLHAWP', 'LEC_GSOLSL', 'LEC_GSBLAdj', 'LEC_GSBLHAWP', 'LEC_GSBL', 'LEC_GSELAdj', 'LEC_GSELHAWP', 'LEC_GSEL', 'LEC_GSSPLAdj', 'LEC_GSSPLHAWP', 'LEC_GSSPL', 'LEC_GSPLAdj', 'LEC_GSPLHAWP', 'LEC_GSPL', 'LEC_GSMLAdj', 'LEC_GSMLHAWP', 'LEC_GSML', 'LEC_GSULAdj', 'LEC_GSULHAWP', 'LEC_GSUL', 'LEC_GSSLWAdj', 'LEC_GSSLWHAWP', 'LEC_GSSLW', 'LEC_GSNLAdj', 'LEC_GSNLHAWP', 'LEC_GSNL', 'GSOBLec', 'LAB_GSVLAdj', 'LAB_GSVLHAWP', 'LAB_GSVL', 'LAB_GSOLVLAdj', 'LAB_GSOLVLHAWP', 'LAB_GSOLVL', 'LAB_GSSLAdj', 'LAB_GSSLHAWP', 'LAB_GSSL', 'LAB_GSOLSLAdj', 'LAB_GSOLSLHAWP', 'LAB_GSOLSL', 'LAB_GSBLAdj', 'LAB_GSBLHAWP', 'LAB_GSBL', 'LAB_GSELAdj', 'LAB_GSELHAWP', 'LAB_GSEL', 'LAB_GSSPLAdj', 'LAB_GSSPLHAWP', 'LAB_GSSPL', 'LAB_GSPLAdj', 'LAB_GSPLHAWP', 'LAB_GSPL', 'LAB_GSMLAdj', 'LAB_GSMLHAWP', 'LAB_GSML', 'LAB_GSULAdj', 'LAB_GSULHAWP', 'LAB_GSUL', 'LAB_GSSLWAdj', 'LAB_GSSLWHAWP', 'LAB_GSSLW', 'LAB_GSNLAdj', 'LAB_GSNLHAWP', 'LAB_GSNL', 'GSOBLab', 'CLC_GSVLAdj', 'CLC_GSVLHAWP', 'CLC_GSVL', 'CLC_GSOLVLAdj', 'CLC_GSOLVLHAWP', 'CLC_GSOLVL', 'CLC_GSSLAdj', 'CLC_GSSLHAWP', 'CLC_GSSL', 'CLC_GSOLSLAdj', 'CLC_GSOLSLHAWP', 'CLC_GSOLSL', 'CLC_GSBLAdj', 'CLC_GSBLHAWP', 'CLC_GSBL', 'CLC_GSELAdj', 'CLC_GSELHAWP', 'CLC_GSEL', 'CLC_GSSPLAdj', 'CLC_GSSPLHAWP', 'CLC_GSSPL', 'CLC_GSPLAdj', 'CLC_GSPLHAWP', 'CLC_GSPL', 'CLC_GSMLAdj', 'CLC_GSMLHAWP', 'CLC_GSML', 'CLC_GSULAdj', 'CLC_GSULHAWP', 'CLC_GSUL', 'CLC_GSSLWAdj', 'CLC_GSSLWHAWP', 'CLC_GSSLW', 'CLC_GSNLAdj', 'CLC_GSNLHAWP', 'CLC_GSNL', 'GSOBClc'], 'number'],
            [['PrdID', 'LEC_GSVLRem', 'LEC_GSOLVLRem', 'LEC_GSSLRem', 'LEC_GSOLSLRem', 'LEC_GSBLRem', 'LEC_GSELRem', 'LEC_GSSPLRem', 'LEC_GSPLRem', 'LEC_GSMLRem', 'LEC_GSULRem', 'LEC_GSSLWRem', 'LEC_GSNLRem', 'GSOBLecRem', 'LAB_GSVLRem', 'LAB_GSOLVLRem', 'LAB_GSSLRem', 'LAB_GSOLSLRem', 'LAB_GSBLRem', 'LAB_GSELRem', 'LAB_GSSPLRem', 'LAB_GSPLRem', 'LAB_GSMLRem', 'LAB_GSULRem', 'LAB_GSSLWRem', 'LAB_GSNLRem', 'GSOBLabRem', 'CLC_GSVLRem', 'CLC_GSOLVLRem', 'CLC_GSSLRem', 'CLC_GSOLSLRem', 'CLC_GSBLRem', 'CLC_GSELRem', 'CLC_GSSPLRem', 'CLC_GSPLRem', 'CLC_GSMLRem', 'CLC_GSULRem', 'CLC_GSSLWRem', 'CLC_GSNLRem', 'GSOBClcRem'], 'string', 'max' => 32],
            [['EmpID', 'PrdID'], 'unique', 'targetAttribute' => ['EmpID', 'PrdID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'EmpID' => 'Emp ID',
            'PrdID' => 'Prd ID',
            'LEC_GSVLAdj'   =>  'Gradschool - Lecture Vacation Leave Adjustment or New Balance',
            'LEC_GSVLHAWP'  =>  'Gradschool - Lecture Vacation Hours Absent With Pay',
            'LEC_GSVLRem'   =>  'Gradschool - Lecture Vacation Leave Remarks',
            'LEC_GSVL'  =>  'Gradschool - Lecture Vacation Leave Used',
            'LEC_GSOLVLAdj' =>  'Gradschool - Lecture Overload Vacation Leave Adjustment or New Balance',
            'LEC_GSOLVLHAWP'    =>  'Gradschool - Lecture Overload Vacation Hours Absent With Pay',
            'LEC_GSOLVLRem' =>  'Gradschool - Lecture Overload Vacation Leave Remarks',
            'LEC_GSOLVL'    =>  'Gradschool - Lecture Overload Vacation Leave Used',
            'LEC_GSSLAdj'   =>  'Gradschool - Lecture Sick Leave Adjustment or New Balance',
            'LEC_GSSLHAWP'  =>  'Gradschool - Lecture Sick Hours Absent With Pay',
            'LEC_GSSLRem'   =>  'Gradschool - Lecture Sick Leave Remarks',
            'LEC_GSSL'  =>  'Gradschool - Lecture Sick Leave Used',
            'LEC_GSOLSLAdj' =>  'Gradschool - Lecture Overload Sick Leave Adjustment or New Balance',
            'LEC_GSOLSLHAWP'    =>  'Gradschool - Lecture Overload Sick Hours Absent With Pay',
            'LEC_GSOLSLRem' =>  'Gradschool - Lecture Overload Sick Leave Remarks',
            'LEC_GSOLSL'    =>  'Gradschool - Lecture Overload Sick Leave Used',
            'LEC_GSBLAdj'   =>  'Gradschool - Lecture Birthday Leave Adjustment or New Balance',
            'LEC_GSBLHAWP'  =>  'Gradschool - Lecture Birthday Hours Absent With Pay',
            'LEC_GSBLRem'   =>  'Gradschool - Lecture Birthday Leave Remarks',
            'LEC_GSBL'  =>  'Gradschool - Lecture Birthday Leave Used',
            'LEC_GSELAdj'   =>  'Gradschool - Lecture Emergency Leave Adjustment or New Balance',
            'LEC_GSELHAWP'  =>  'Gradschool - Lecture Emergency Hours Absent With Pay',
            'LEC_GSELRem'   =>  'Gradschool - Lecture Emergency Leave Remarks',
            'LEC_GSEL'  =>  'Gradschool - Lecture Emergency Leave Used',
            'LEC_GSSPLAdj'  =>  'Gradschool - Lecture Solo Parent Leave Adjustment or New Balance',
            'LEC_GSSPLHAWP' =>  'Gradschool - Lecture Solo Parent Hours Absent With Pay',
            'LEC_GSSPLRem'  =>  'Gradschool - Lecture Solo Parent Leave Remarks',
            'LEC_GSSPL' =>  'Gradschool - Lecture Solo Parent Leave Used',
            'LEC_GSPLAdj'   =>  'Gradschool - Lecture Paternity Leave Adjustment or New Balance',
            'LEC_GSPLHAWP'  =>  'Gradschool - Lecture Paternity Hours Absent With Pay',
            'LEC_GSPLRem'   =>  'Gradschool - Lecture Paternity Leave Remarks',
            'LEC_GSPL'  =>  'Gradschool - Lecture Paternity Leave Used',
            'LEC_GSMLAdj'   =>  'Gradschool - Lecture Maternity Leave Adjustment or New Balance',
            'LEC_GSMLHAWP'  =>  'Gradschool - Lecture Maternity Hours Absent With Pay',
            'LEC_GSMLRem'   =>  'Gradschool - Lecture Maternity Leave Remarks',
            'LEC_GSML'  =>  'Gradschool - Lecture Maternity Leave Used',
            'LEC_GSULAdj'   =>  'Gradschool - Lecture Union Leave Adjustment or New Balance',
            'LEC_GSULHAWP'  =>  'Gradschool - Lecture Union Hours Absent With Pay',
            'LEC_GSULRem'   =>  'Gradschool - Lecture Union Leave Remarks',
            'LEC_GSUL'  =>  'Gradschool - Lecture Union Leave Used',
            'LEC_GSSLWAdj'  =>  'Gradschool - Lecture Special Leave for Women Leave Adjustment or New Balance',
            'LEC_GSSLWHAWP' =>  'Gradschool - Lecture Special Leave for Women Hours Absent With Pay',
            'LEC_GSSLWRem'  =>  'Gradschool - Lecture Special Leave for Women Leave Remarks',
            'LEC_GSSLW' =>  'Gradschool - Lecture Special Leave for Women Used',
            'LEC_GSNLAdj'   =>  'Gradschool - Lecture Nuptial Leave Adjustment or New Balance',
            'LEC_GSNLHAWP'  =>  'Gradschool - Lecture Nuptial Hours Absent With Pay',
            'LEC_GSNLRem'   =>  'Gradschool - Lecture Nuptial Leave Remarks',
            'LEC_GSNL'  =>  'Gradschool - Lecture Nuptial Leave Used',
            'GSOBLec'   =>  'Gradschool - Lecture Official Business Used',
            'GSOBLecRem'    =>  'Gradschool - Lecture Official Business Remarks',
            'LAB_GSVLAdj'   =>  'Gradschool - Laboratory Vacation Leave Adjustment or New Balance',
            'LAB_GSVLHAWP'  =>  'Gradschool - Laboratory Vacation Hours Absent With Pay',
            'LAB_GSVLRem'   =>  'Gradschool - Laboratory Vacation Leave Remarks',
            'LAB_GSVL'  =>  'Gradschool - Laboratory Vacation Leave Used',
            'LAB_GSOLVLAdj' =>  'Gradschool - Laboratory Overload Vacation Leave Adjustment or New Balance',
            'LAB_GSOLVLHAWP'    =>  'Gradschool - Laboratory Overload Vacation Hours Absent With Pay',
            'LAB_GSOLVLRem' =>  'Gradschool - Laboratory Overload Vacation Leave Remarks',
            'LAB_GSOLVL'    =>  'Gradschool - Laboratory Overload Vacation Leave Used',
            'LAB_GSSLAdj'   =>  'Gradschool - Laboratory Sick Leave Adjustment or New Balance',
            'LAB_GSSLHAWP'  =>  'Gradschool - Laboratory Sick Hours Absent With Pay',
            'LAB_GSSLRem'   =>  'Gradschool - Laboratory Sick Leave Remarks',
            'LAB_GSSL'  =>  'Gradschool - Laboratory Sick Leave Used',
            'LAB_GSOLSLAdj' =>  'Gradschool - Laboratory Overload Sick Leave Adjustment or New Balance',
            'LAB_GSOLSLHAWP'    =>  'Gradschool - Laboratory Overload Sick Hours Absent With Pay',
            'LAB_GSOLSLRem' =>  'Gradschool - Laboratory Overload Sick Leave Remarks',
            'LAB_GSOLSL'    =>  'Gradschool - Laboratory Overload Sick Leave Used',
            'LAB_GSBLAdj'   =>  'Gradschool - Laboratory Birthday Leave Adjustment or New Balance',
            'LAB_GSBLHAWP'  =>  'Gradschool - Laboratory Birthday Hours Absent With Pay',
            'LAB_GSBLRem'   =>  'Gradschool - Laboratory Birthday Leave Remarks',
            'LAB_GSBL'  =>  'Gradschool - Laboratory Birthday Leave Used',
            'LAB_GSELAdj'   =>  'Gradschool - Laboratory Emergency Leave Adjustment or New Balance',
            'LAB_GSELHAWP'  =>  'Gradschool - Laboratory Emergency Hours Absent With Pay',
            'LAB_GSELRem'   =>  'Gradschool - Laboratory Emergency Leave Remarks',
            'LAB_GSEL'  =>  'Gradschool - Laboratory Emergency Leave Used',
            'LAB_GSSPLAdj'  =>  'Gradschool - Laboratory Solo Parent Leave Adjustment or New Balance',
            'LAB_GSSPLHAWP' =>  'Gradschool - Laboratory Solo Parent Hours Absent With Pay',
            'LAB_GSSPLRem'  =>  'Gradschool - Laboratory Solo Parent Leave Remarks',
            'LAB_GSSPL' =>  'Gradschool - Laboratory Solo Parent Leave Used',
            'LAB_GSPLAdj'   =>  'Gradschool - Laboratory Paternity Leave Adjustment or New Balance',
            'LAB_GSPLHAWP'  =>  'Gradschool - Laboratory Paternity Hours Absent With Pay',
            'LAB_GSPLRem'   =>  'Gradschool - Laboratory Paternity Leave Remarks',
            'LAB_GSPL'  =>  'Gradschool - Laboratory Paternity Leave Used',
            'LAB_GSMLAdj'   =>  'Gradschool - Laboratory Maternity Leave Adjustment or New Balance',
            'LAB_GSMLHAWP'  =>  'Gradschool - Laboratory Maternity Hours Absent With Pay',
            'LAB_GSMLRem'   =>  'Gradschool - Laboratory Maternity Leave Remarks',
            'LAB_GSML'  =>  'Gradschool - Laboratory Maternity Leave Used',
            'LAB_GSULAdj'   =>  'Gradschool - Laboratory Union Leave Adjustment or New Balance',
            'LAB_GSULHAWP'  =>  'Gradschool - Laboratory Union Hours Absent With Pay',
            'LAB_GSULRem'   =>  'Gradschool - Laboratory Union Leave Remarks',
            'LAB_GSUL'  =>  'Gradschool - Laboratory Union Leave Used',
            'LAB_GSSLWAdj'  =>  'Gradschool - Laboratory Special Leave for Women Leave Adjustment or New Balance',
            'LAB_GSSLWHAWP' =>  'Gradschool - Laboratory Special Leave for Women Hours Absent With Pay',
            'LAB_GSSLWRem'  =>  'Gradschool - Laboratory Special Leave for Women Leave Remarks',
            'LAB_GSSLW' =>  'Gradschool - Laboratory Special Leave for Women Used',
            'LAB_GSNLAdj'   =>  'Gradschool - Laboratory Nuptial Leave Adjustment or New Balance',
            'LAB_GSNLHAWP'  =>  'Gradschool - Laboratory Nuptial Hours Absent With Pay',
            'LAB_GSNLRem'   =>  'Gradschool - Laboratory Nuptial Leave Remarks',
            'LAB_GSNL'  =>  'Gradschool - Laboratory Nuptial Leave Used',
            'GSOBLab'   =>  'Gradschool - Laboratory Official Business Used',
            'GSOBLabRem'    =>  'Gradschool - Laboratory Official Business Remarks',
            'CLC_GSVLAdj'   =>  'Gradschool - Lecture Vacation Leave Adjustment or New Balance',
            'CLC_GSVLHAWP'  =>  'Gradschool - Lecture Vacation Hours Absent With Pay',
            'CLC_GSVLRem'   =>  'Gradschool - Lecture Vacation Leave Remarks',
            'CLC_GSVL'  =>  'Gradschool - Lecture Vacation Leave Used',
            'CLC_GSOLVLAdj' =>  'Gradschool - Lecture Overload Vacation Leave Adjustment or New Balance',
            'CLC_GSOLVLHAWP'    =>  'Gradschool - Lecture Overload Vacation Hours Absent With Pay',
            'CLC_GSOLVLRem' =>  'Gradschool - Lecture Overload Vacation Leave Remarks',
            'CLC_GSOLVL'    =>  'Gradschool - Lecture Overload Vacation Leave Used',
            'CLC_GSSLAdj'   =>  'Gradschool - Lecture Sick Leave Adjustment or New Balance',
            'CLC_GSSLHAWP'  =>  'Gradschool - Lecture Sick Hours Absent With Pay',
            'CLC_GSSLRem'   =>  'Gradschool - Lecture Sick Leave Remarks',
            'CLC_GSSL'  =>  'Gradschool - Lecture Sick Leave Used',
            'CLC_GSOLSLAdj' =>  'Gradschool - Lecture Overload Sick Leave Adjustment or New Balance',
            'CLC_GSOLSLHAWP'    =>  'Gradschool - Lecture Overload Sick Hours Absent With Pay',
            'CLC_GSOLSLRem' =>  'Gradschool - Lecture Overload Sick Leave Remarks',
            'CLC_GSOLSL'    =>  'Gradschool - Lecture Overload Sick Leave Used',
            'CLC_GSBLAdj'   =>  'Gradschool - Lecture Birthday Leave Adjustment or New Balance',
            'CLC_GSBLHAWP'  =>  'Gradschool - Lecture Birthday Hours Absent With Pay',
            'CLC_GSBLRem'   =>  'Gradschool - Lecture Birthday Leave Remarks',
            'CLC_GSBL'  =>  'Gradschool - Lecture Birthday Leave Used',
            'CLC_GSELAdj'   =>  'Gradschool - Lecture Emergency Leave Adjustment or New Balance',
            'CLC_GSELHAWP'  =>  'Gradschool - Lecture Emergency Hours Absent With Pay',
            'CLC_GSELRem'   =>  'Gradschool - Lecture Emergency Leave Remarks',
            'CLC_GSEL'  =>  'Gradschool - Lecture Emergency Leave Used',
            'CLC_GSSPLAdj'  =>  'Gradschool - Lecture Solo Parent Leave Adjustment or New Balance',
            'CLC_GSSPLHAWP' =>  'Gradschool - Lecture Solo Parent Hours Absent With Pay',
            'CLC_GSSPLRem'  =>  'Gradschool - Lecture Solo Parent Leave Remarks',
            'CLC_GSSPL' =>  'Gradschool - Lecture Solo Parent Leave Used',
            'CLC_GSPLAdj'   =>  'Gradschool - Lecture Paternity Leave Adjustment or New Balance',
            'CLC_GSPLHAWP'  =>  'Gradschool - Lecture Paternity Hours Absent With Pay',
            'CLC_GSPLRem'   =>  'Gradschool - Lecture Paternity Leave Remarks',
            'CLC_GSPL'  =>  'Gradschool - Lecture Paternity Leave Used',
            'CLC_GSMLAdj'   =>  'Gradschool - Lecture Maternity Leave Adjustment or New Balance',
            'CLC_GSMLHAWP'  =>  'Gradschool - Lecture Maternity Hours Absent With Pay',
            'CLC_GSMLRem'   =>  'Gradschool - Lecture Maternity Leave Remarks',
            'CLC_GSML'  =>  'Gradschool - Lecture Maternity Leave Used',
            'CLC_GSULAdj'   =>  'Gradschool - Lecture Union Leave Adjustment or New Balance',
            'CLC_GSULHAWP'  =>  'Gradschool - Lecture Union Hours Absent With Pay',
            'CLC_GSULRem'   =>  'Gradschool - Lecture Union Leave Remarks',
            'CLC_GSUL'  =>  'Gradschool - Lecture Union Leave Used',
            'CLC_GSSLWAdj'  =>  'Gradschool - Lecture Special Leave for Women Leave Adjustment or New Balance',
            'CLC_GSSLWHAWP' =>  'Gradschool - Lecture Special Leave for Women Hours Absent With Pay',
            'CLC_GSSLWRem'  =>  'Gradschool - Lecture Special Leave for Women Leave Remarks',
            'CLC_GSSLW' =>  'Gradschool - Lecture Special Leave for Women Used',
            'CLC_GSNLAdj'   =>  'Gradschool - Lecture Nuptial Leave Adjustment or New Balance',
            'CLC_GSNLHAWP'  =>  'Gradschool - Lecture Nuptial Hours Absent With Pay',
            'CLC_GSNLRem'   =>  'Gradschool - Lecture Nuptial Leave Remarks',
            'CLC_GSNL'  =>  'Gradschool - Lecture Nuptial Leave Used',
            'GSOBClc'   =>  'Gradschool - Lecture Official Business Used',
            'GSOBClcRem'    =>  'Gradschool - Lecture Official Business Remarks',

        ];
    }

    public function getEmployeeList()
    {
        return $this->hasOne(PayrollEmployeeList::className(), ['EmpID' => 'EmpID']);
    }
}
