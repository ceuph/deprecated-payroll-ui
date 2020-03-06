<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SH03_UGLEAVECREDITS".
 *
 * @property string $EmpID
 * @property string $PrdID
 * @property string $LEC_UGVLAdj
 * @property string $LEC_UGVLHAWP
 * @property string $LEC_UGVLRem
 * @property string $LEC_UGVL
 * @property string $LEC_UGOLVLAdj
 * @property string $LEC_UGOLVLHAWP
 * @property string $LEC_UGOLVLRem
 * @property string $LEC_UGOLVL
 * @property string $LEC_UGSLAdj
 * @property string $LEC_UGSLHAWP
 * @property string $LEC_UGSLRem
 * @property string $LEC_UGSL
 * @property string $LEC_UGOLSLAdj
 * @property string $LEC_UGOLSLHAWP
 * @property string $LEC_UGOLSLRem
 * @property string $LEC_UGOLSL
 * @property string $LEC_UGBLAdj
 * @property string $LEC_UGBLHAWP
 * @property string $LEC_UGBLRem
 * @property string $LEC_UGBL
 * @property string $LEC_UGELAdj
 * @property string $LEC_UGELHAWP
 * @property string $LEC_UGELRem
 * @property string $LEC_UGEL
 * @property string $LEC_UGSPLAdj
 * @property string $LEC_UGSPLHAWP
 * @property string $LEC_UGSPLRem
 * @property string $LEC_UGSPL
 * @property string $LEC_UGPLAdj
 * @property string $LEC_UGPLHAWP
 * @property string $LEC_UGPLRem
 * @property string $LEC_UGPL
 * @property string $LEC_UGMLAdj
 * @property string $LEC_UGMLHAWP
 * @property string $LEC_UGMLRem
 * @property string $LEC_UGML
 * @property string $LEC_UGULAdj
 * @property string $LEC_UGULHAWP
 * @property string $LEC_UGULRem
 * @property string $LEC_UGUL
 * @property string $LEC_UGSLWAdj
 * @property string $LEC_UGSLWHAWP
 * @property string $LEC_UGSLWRem
 * @property string $LEC_UGSLW
 * @property string $LEC_UGNLAdj
 * @property string $LEC_UGNLHAWP
 * @property string $LEC_UGNLRem
 * @property string $LEC_UGNL
 * @property string $UGOBLec
 * @property string $UGOBLecRem
 * @property string $LAB_UGVLAdj
 * @property string $LAB_UGVLHAWP
 * @property string $LAB_UGVLRem
 * @property string $LAB_UGVL
 * @property string $LAB_UGOLVLAdj
 * @property string $LAB_UGOLVLHAWP
 * @property string $LAB_UGOLVLRem
 * @property string $LAB_UGOLVL
 * @property string $LAB_UGSLAdj
 * @property string $LAB_UGSLHAWP
 * @property string $LAB_UGSLRem
 * @property string $LAB_UGSL
 * @property string $LAB_UGOLSLAdj
 * @property string $LAB_UGOLSLHAWP
 * @property string $LAB_UGOLSLRem
 * @property string $LAB_UGOLSL
 * @property string $LAB_UGBLAdj
 * @property string $LAB_UGBLHAWP
 * @property string $LAB_UGBLRem
 * @property string $LAB_UGBL
 * @property string $LAB_UGELAdj
 * @property string $LAB_UGELHAWP
 * @property string $LAB_UGELRem
 * @property string $LAB_UGEL
 * @property string $LAB_UGSPLAdj
 * @property string $LAB_UGSPLHAWP
 * @property string $LAB_UGSPLRem
 * @property string $LAB_UGSPL
 * @property string $LAB_UGPLAdj
 * @property string $LAB_UGPLHAWP
 * @property string $LAB_UGPLRem
 * @property string $LAB_UGPL
 * @property string $LAB_UGMLAdj
 * @property string $LAB_UGMLHAWP
 * @property string $LAB_UGMLRem
 * @property string $LAB_UGML
 * @property string $LAB_UGULAdj
 * @property string $LAB_UGULHAWP
 * @property string $LAB_UGULRem
 * @property string $LAB_UGUL
 * @property string $LAB_UGSLWAdj
 * @property string $LAB_UGSLWHAWP
 * @property string $LAB_UGSLWRem
 * @property string $LAB_UGSLW
 * @property string $LAB_UGNLAdj
 * @property string $LAB_UGNLHAWP
 * @property string $LAB_UGNLRem
 * @property string $LAB_UGNL
 * @property string $UGOBLab
 * @property string $UGOBLabRem
 * @property string $CLC_UGVLAdj
 * @property string $CLC_UGVLHAWP
 * @property string $CLC_UGVLRem
 * @property string $CLC_UGVL
 * @property string $CLC_UGOLVLAdj
 * @property string $CLC_UGOLVLHAWP
 * @property string $CLC_UGOLVLRem
 * @property string $CLC_UGOLVL
 * @property string $CLC_UGSLAdj
 * @property string $CLC_UGSLHAWP
 * @property string $CLC_UGSLRem
 * @property string $CLC_UGSL
 * @property string $CLC_UGOLSLAdj
 * @property string $CLC_UGOLSLHAWP
 * @property string $CLC_UGOLSLRem
 * @property string $CLC_UGOLSL
 * @property string $CLC_UGBLAdj
 * @property string $CLC_UGBLHAWP
 * @property string $CLC_UGBLRem
 * @property string $CLC_UGBL
 * @property string $CLC_UGELAdj
 * @property string $CLC_UGELHAWP
 * @property string $CLC_UGELRem
 * @property string $CLC_UGEL
 * @property string $CLC_UGSPLAdj
 * @property string $CLC_UGSPLHAWP
 * @property string $CLC_UGSPLRem
 * @property string $CLC_UGSPL
 * @property string $CLC_UGPLAdj
 * @property string $CLC_UGPLHAWP
 * @property string $CLC_UGPLRem
 * @property string $CLC_UGPL
 * @property string $CLC_UGMLAdj
 * @property string $CLC_UGMLHAWP
 * @property string $CLC_UGMLRem
 * @property string $CLC_UGML
 * @property string $CLC_UGULAdj
 * @property string $CLC_UGULHAWP
 * @property string $CLC_UGULRem
 * @property string $CLC_UGUL
 * @property string $CLC_UGSLWAdj
 * @property string $CLC_UGSLWHAWP
 * @property string $CLC_UGSLWRem
 * @property string $CLC_UGSLW
 * @property string $CLC_UGNLAdj
 * @property string $CLC_UGNLHAWP
 * @property string $CLC_UGNLRem
 * @property string $CLC_UGNL
 * @property string $UGOBClc
 * @property string $UGOBClcRem
 */
class UgLeaveCredits extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'SH03_UGLEAVECREDITS';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PrdID'], 'required'],
            [['LEC_UGVLAdj', 'LEC_UGVLHAWP', 'LEC_UGVL', 'LEC_UGOLVLAdj', 'LEC_UGOLVLHAWP', 'LEC_UGOLVL', 'LEC_UGSLAdj', 'LEC_UGSLHAWP', 'LEC_UGSL', 'LEC_UGOLSLAdj', 'LEC_UGOLSLHAWP', 'LEC_UGOLSL', 'LEC_UGBLAdj', 'LEC_UGBLHAWP', 'LEC_UGBL', 'LEC_UGELAdj', 'LEC_UGELHAWP', 'LEC_UGEL', 'LEC_UGSPLAdj', 'LEC_UGSPLHAWP', 'LEC_UGSPL', 'LEC_UGPLAdj', 'LEC_UGPLHAWP', 'LEC_UGPL', 'LEC_UGMLAdj', 'LEC_UGMLHAWP', 'LEC_UGML', 'LEC_UGULAdj', 'LEC_UGULHAWP', 'LEC_UGUL', 'LEC_UGSLWAdj', 'LEC_UGSLWHAWP', 'LEC_UGSLW', 'LEC_UGNLAdj', 'LEC_UGNLHAWP', 'LEC_UGNL', 'UGOBLec', 'LAB_UGVLAdj', 'LAB_UGVLHAWP', 'LAB_UGVL', 'LAB_UGOLVLAdj', 'LAB_UGOLVLHAWP', 'LAB_UGOLVL', 'LAB_UGSLAdj', 'LAB_UGSLHAWP', 'LAB_UGSL', 'LAB_UGOLSLAdj', 'LAB_UGOLSLHAWP', 'LAB_UGOLSL', 'LAB_UGBLAdj', 'LAB_UGBLHAWP', 'LAB_UGBL', 'LAB_UGELAdj', 'LAB_UGELHAWP', 'LAB_UGEL', 'LAB_UGSPLAdj', 'LAB_UGSPLHAWP', 'LAB_UGSPL', 'LAB_UGPLAdj', 'LAB_UGPLHAWP', 'LAB_UGPL', 'LAB_UGMLAdj', 'LAB_UGMLHAWP', 'LAB_UGML', 'LAB_UGULAdj', 'LAB_UGULHAWP', 'LAB_UGUL', 'LAB_UGSLWAdj', 'LAB_UGSLWHAWP', 'LAB_UGSLW', 'LAB_UGNLAdj', 'LAB_UGNLHAWP', 'LAB_UGNL', 'UGOBLab', 'CLC_UGVLAdj', 'CLC_UGVLHAWP', 'CLC_UGVL', 'CLC_UGOLVLAdj', 'CLC_UGOLVLHAWP', 'CLC_UGOLVL', 'CLC_UGSLAdj', 'CLC_UGSLHAWP', 'CLC_UGSL', 'CLC_UGOLSLAdj', 'CLC_UGOLSLHAWP', 'CLC_UGOLSL', 'CLC_UGBLAdj', 'CLC_UGBLHAWP', 'CLC_UGBL', 'CLC_UGELAdj', 'CLC_UGELHAWP', 'CLC_UGEL', 'CLC_UGSPLAdj', 'CLC_UGSPLHAWP', 'CLC_UGSPL', 'CLC_UGPLAdj', 'CLC_UGPLHAWP', 'CLC_UGPL', 'CLC_UGMLAdj', 'CLC_UGMLHAWP', 'CLC_UGML', 'CLC_UGULAdj', 'CLC_UGULHAWP', 'CLC_UGUL', 'CLC_UGSLWAdj', 'CLC_UGSLWHAWP', 'CLC_UGSLW', 'CLC_UGNLAdj', 'CLC_UGNLHAWP', 'CLC_UGNL', 'UGOBClc'], 'number'],
            [['PrdID', 'LEC_UGVLRem', 'LEC_UGOLVLRem', 'LEC_UGSLRem', 'LEC_UGOLSLRem', 'LEC_UGBLRem', 'LEC_UGELRem', 'LEC_UGSPLRem', 'LEC_UGPLRem', 'LEC_UGMLRem', 'LEC_UGULRem', 'LEC_UGSLWRem', 'LEC_UGNLRem', 'UGOBLecRem', 'LAB_UGVLRem', 'LAB_UGOLVLRem', 'LAB_UGSLRem', 'LAB_UGOLSLRem', 'LAB_UGBLRem', 'LAB_UGELRem', 'LAB_UGSPLRem', 'LAB_UGPLRem', 'LAB_UGMLRem', 'LAB_UGULRem', 'LAB_UGSLWRem', 'LAB_UGNLRem', 'UGOBLabRem', 'CLC_UGVLRem', 'CLC_UGOLVLRem', 'CLC_UGSLRem', 'CLC_UGOLSLRem', 'CLC_UGBLRem', 'CLC_UGELRem', 'CLC_UGSPLRem', 'CLC_UGPLRem', 'CLC_UGMLRem', 'CLC_UGULRem', 'CLC_UGSLWRem', 'CLC_UGNLRem', 'UGOBClcRem'], 'string', 'max' => 32],
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
            'LEC_UGVLAdj'   =>  'Lecture Vacation Leave Adjustment or New Balance',
            'LEC_UGVLHAWP'  =>  'Lecture Vacation Hours Absent With Pay',
            'LEC_UGVLRem'   =>  'Lecture Vacation Leave Remarks',
            'LEC_UGVL'  =>  'Lecture Vacation Leave Used',
            'LEC_UGOLVLAdj' =>  'Lecture Overload Vacation Leave Adjustment or New Balance',
            'LEC_UGOLVLHAWP'    =>  'Lecture Overload Vacation Hours Absent With Pay',
            'LEC_UGOLVLRem' =>  'Lecture Overload Vacation Leave Remarks',
            'LEC_UGOLVL'    =>  'Lecture Overload Vacation Leave Used',
            'LEC_UGSLAdj'   =>  'Lecture Sick Leave Adjustment or New Balance',
            'LEC_UGSLHAWP'  =>  'Lecture Sick Hours Absent With Pay',
            'LEC_UGSLRem'   =>  'Lecture Sick Leave Remarks',
            'LEC_UGSL'  =>  'Lecture Sick Leave Used',
            'LEC_UGOLSLAdj' =>  'Lecture Overload Sick Leave Adjustment or New Balance',
            'LEC_UGOLSLHAWP'    =>  'Lecture Overload Sick Hours Absent With Pay',
            'LEC_UGOLSLRem' =>  'Lecture Overload Sick Leave Remarks',
            'LEC_UGOLSL'    =>  'Lecture Overload Sick Leave Used',
            'LEC_UGBLAdj'   =>  'Lecture Birthday Leave Adjustment or New Balance',
            'LEC_UGBLHAWP'  =>  'Lecture Birthday Hours Absent With Pay',
            'LEC_UGBLRem'   =>  'Lecture Birthday Leave Remarks',
            'LEC_UGBL'  =>  'Lecture Birthday Leave Used',
            'LEC_UGELAdj'   =>  'Lecture Emergency Leave Adjustment or New Balance',
            'LEC_UGELHAWP'  =>  'Lecture Emergency Hours Absent With Pay',
            'LEC_UGELRem'   =>  'Lecture Emergency Leave Remarks',
            'LEC_UGEL'  =>  'Lecture Emergency Leave Used',
            'LEC_UGSPLAdj'  =>  'Lecture Solo Parent Leave Adjustment or New Balance',
            'LEC_UGSPLHAWP' =>  'Lecture Solo Parent Hours Absent With Pay',
            'LEC_UGSPLRem'  =>  'Lecture Solo Parent Leave Remarks',
            'LEC_UGSPL' =>  'Lecture Solo Parent Leave Used',
            'LEC_UGPLAdj'   =>  'Lecture Paternity Leave Adjustment or New Balance',
            'LEC_UGPLHAWP'  =>  'Lecture Paternity Hours Absent With Pay',
            'LEC_UGPLRem'   =>  'Lecture Paternity Leave Remarks',
            'LEC_UGPL'  =>  'Lecture Paternity Leave Used',
            'LEC_UGMLAdj'   =>  'Lecture Maternity Leave Adjustment or New Balance',
            'LEC_UGMLHAWP'  =>  'Lecture Maternity Hours Absent With Pay',
            'LEC_UGMLRem'   =>  'Lecture Maternity Leave Remarks',
            'LEC_UGML'  =>  'Lecture Maternity Leave Used',
            'LEC_UGULAdj'   =>  'Lecture Union Leave Adjustment or New Balance',
            'LEC_UGULHAWP'  =>  'Lecture Union Hours Absent With Pay',
            'LEC_UGULRem'   =>  'Lecture Union Leave Remarks',
            'LEC_UGUL'  =>  'Lecture Union Leave Used',
            'LEC_UGSLWAdj'  =>  'Lecture Special Leave for Women Leave Adjustment or New Balance',
            'LEC_UGSLWHAWP' =>  'Lecture Special Leave for Women Hours Absent With Pay',
            'LEC_UGSLWRem'  =>  'Lecture Special Leave for Women Leave Remarks',
            'LEC_UGSLW' =>  'Lecture Special Leave for Women Used',
            'LEC_UGNLAdj'   =>  'Lecture Nuptial Leave Adjustment or New Balance',
            'LEC_UGNLHAWP'  =>  'Lecture Nuptial Hours Absent With Pay',
            'LEC_UGNLRem'   =>  'Lecture Nuptial Leave Remarks',
            'LEC_UGNL'  =>  'Lecture Nuptial Leave Used',
            'UGOBLec'   =>  'Lecture Official Business Used',
            'UGOBLecRem'    =>  'Lecture Official Business Remarks',
            'LAB_UGVLAdj'   =>  'Laboratory Vacation Leave Adjustment or New Balance',
            'LAB_UGVLHAWP'  =>  'Laboratory Vacation Hours Absent With Pay',
            'LAB_UGVLRem'   =>  'Laboratory Vacation Leave Remarks',
            'LAB_UGVL'  =>  'Laboratory Vacation Leave Used',
            'LAB_UGOLVLAdj' =>  'Laboratory Overload Vacation Leave Adjustment or New Balance',
            'LAB_UGOLVLHAWP'    =>  'Laboratory Overload Vacation Hours Absent With Pay',
            'LAB_UGOLVLRem' =>  'Laboratory Overload Vacation Leave Remarks',
            'LAB_UGOLVL'    =>  'Laboratory Overload Vacation Leave Used',
            'LAB_UGSLAdj'   =>  'Laboratory Sick Leave Adjustment or New Balance',
            'LAB_UGSLHAWP'  =>  'Laboratory Sick Hours Absent With Pay',
            'LAB_UGSLRem'   =>  'Laboratory Sick Leave Remarks',
            'LAB_UGSL'  =>  'Laboratory Sick Leave Used',
            'LAB_UGOLSLAdj' =>  'Laboratory Overload Sick Leave Adjustment or New Balance',
            'LAB_UGOLSLHAWP'    =>  'Laboratory Overload Sick Hours Absent With Pay',
            'LAB_UGOLSLRem' =>  'Laboratory Overload Sick Leave Remarks',
            'LAB_UGOLSL'    =>  'Laboratory Overload Sick Leave Used',
            'LAB_UGBLAdj'   =>  'Laboratory Birthday Leave Adjustment or New Balance',
            'LAB_UGBLHAWP'  =>  'Laboratory Birthday Hours Absent With Pay',
            'LAB_UGBLRem'   =>  'Laboratory Birthday Leave Remarks',
            'LAB_UGBL'  =>  'Laboratory Birthday Leave Used',
            'LAB_UGELAdj'   =>  'Laboratory Emergency Leave Adjustment or New Balance',
            'LAB_UGELHAWP'  =>  'Laboratory Emergency Hours Absent With Pay',
            'LAB_UGELRem'   =>  'Laboratory Emergency Leave Remarks',
            'LAB_UGEL'  =>  'Laboratory Emergency Leave Used',
            'LAB_UGSPLAdj'  =>  'Laboratory Solo Parent Leave Adjustment or New Balance',
            'LAB_UGSPLHAWP' =>  'Laboratory Solo Parent Hours Absent With Pay',
            'LAB_UGSPLRem'  =>  'Laboratory Solo Parent Leave Remarks',
            'LAB_UGSPL' =>  'Laboratory Solo Parent Leave Used',
            'LAB_UGPLAdj'   =>  'Laboratory Paternity Leave Adjustment or New Balance',
            'LAB_UGPLHAWP'  =>  'Laboratory Paternity Hours Absent With Pay',
            'LAB_UGPLRem'   =>  'Laboratory Paternity Leave Remarks',
            'LAB_UGPL'  =>  'Laboratory Paternity Leave Used',
            'LAB_UGMLAdj'   =>  'Laboratory Maternity Leave Adjustment or New Balance',
            'LAB_UGMLHAWP'  =>  'Laboratory Maternity Hours Absent With Pay',
            'LAB_UGMLRem'   =>  'Laboratory Maternity Leave Remarks',
            'LAB_UGML'  =>  'Laboratory Maternity Leave Used',
            'LAB_UGULAdj'   =>  'Laboratory Union Leave Adjustment or New Balance',
            'LAB_UGULHAWP'  =>  'Laboratory Union Hours Absent With Pay',
            'LAB_UGULRem'   =>  'Laboratory Union Leave Remarks',
            'LAB_UGUL'  =>  'Laboratory Union Leave Used',
            'LAB_UGSLWAdj'  =>  'Laboratory Special Leave for Women Leave Adjustment or New Balance',
            'LAB_UGSLWHAWP' =>  'Laboratory Special Leave for Women Hours Absent With Pay',
            'LAB_UGSLWRem'  =>  'Laboratory Special Leave for Women Leave Remarks',
            'LAB_UGSLW' =>  'Laboratory Special Leave for Women Used',
            'LAB_UGNLAdj'   =>  'Laboratory Nuptial Leave Adjustment or New Balance',
            'LAB_UGNLHAWP'  =>  'Laboratory Nuptial Hours Absent With Pay',
            'LAB_UGNLRem'   =>  'Laboratory Nuptial Leave Remarks',
            'LAB_UGNL'  =>  'Laboratory Nuptial Leave Used',
            'UGOBLab'   =>  'Laboratory Official Business Used',
            'UGOBLabRem'    =>  'Laboratory Official Business Remarks',
            'CLC_UGVLAdj'   =>  'Clinic Vacation Leave Adjustment or New Balance',
            'CLC_UGVLHAWP'  =>  'Clinic Vacation Hours Absent With Pay',
            'CLC_UGVLRem'   =>  'Clinic Vacation Leave Remarks',
            'CLC_UGVL'  =>  'Clinic VacClinication Leave Used',
            'CLC_UGOLVLAdj' =>  'Clinic Overload Vacation Leave Adjustment or New Balance',
            'CLC_UGOLVLHAWP'    =>  'Clinic Overload Vacation Hours Absent With Pay',
            'CLC_UGOLVLRem' =>  'Clinic Overload Vacation Leave Remarks',
            'CLC_UGOLVL'    =>  'Clinic Overload Vacation Leave Used',
            'CLC_UGSLAdj'   =>  'Clinic Sick Leave Adjustment or New Balance',
            'CLC_UGSLHAWP'  =>  'Clinic Sick Hours Absent With Pay',
            'CLC_UGSLRem'   =>  'Clinic Sick Leave Remarks',
            'CLC_UGSL'  =>  'Clinic Sick Leave Used',
            'CLC_UGOLSLAdj' =>  'Clinic Overload Sick Leave Adjustment or New Balance',
            'CLC_UGOLSLHAWP'    =>  'Clinic Overload Sick Hours Absent With Pay',
            'CLC_UGOLSLRem' =>  'Clinic Overload Sick Leave Remarks',
            'CLC_UGOLSL'    =>  'Clinic Overload Sick Leave Used',
            'CLC_UGBLAdj'   =>  'Clinic Birthday Leave Adjustment or New Balance',
            'CLC_UGBLHAWP'  =>  'Clinic Birthday Hours Absent With Pay',
            'CLC_UGBLRem'   =>  'Clinic Birthday Leave Remarks',
            'CLC_UGBL'  =>  'Clinic Birthday Leave Used',
            'CLC_UGELAdj'   =>  'Clinic Emergency Leave Adjustment or New Balance',
            'CLC_UGELHAWP'  =>  'Clinic Emergency Hours Absent With Pay',
            'CLC_UGELRem'   =>  'Clinic Emergency Leave Remarks',
            'CLC_UGEL'  =>  'Clinic Emergency Leave Used',
            'CLC_UGSPLAdj'  =>  'Clinic Solo Parent Leave Adjustment or New Balance',
            'CLC_UGSPLHAWP' =>  'Clinic Solo Parent Hours Absent With Pay',
            'CLC_UGSPLRem'  =>  'Clinic Solo Parent Leave Remarks',
            'CLC_UGSPL' =>  'Clinic Solo Parent Leave Used',
            'CLC_UGPLAdj'   =>  'Clinic Paternity Leave Adjustment or New Balance',
            'CLC_UGPLHAWP'  =>  'Clinic Paternity Hours Absent With Pay',
            'CLC_UGPLRem'   =>  'Clinic Paternity Leave Remarks',
            'CLC_UGPL'  =>  'Clinic Paternity Leave Used',
            'CLC_UGMLAdj'   =>  'Clinic Maternity Leave Adjustment or New Balance',
            'CLC_UGMLHAWP'  =>  'Clinic Maternity Hours Absent With Pay',
            'CLC_UGMLRem'   =>  'Clinic Maternity Leave Remarks',
            'CLC_UGML'  =>  'Clinic Maternity Leave Used',
            'CLC_UGULAdj'   =>  'Clinic Union Leave Adjustment or New Balance',
            'CLC_UGULHAWP'  =>  'Clinic Union Hours Absent With Pay',
            'CLC_UGULRem'   =>  'Clinic Union Leave Remarks',
            'CLC_UGUL'  =>  'Clinic Union Leave Used',
            'CLC_UGSLWAdj'  =>  'Clinic Special Leave for Women Leave Adjustment or New Balance',
            'CLC_UGSLWHAWP' =>  'Clinic Special Leave for Women Hours Absent With Pay',
            'CLC_UGSLWRem'  =>  'Clinic Special Leave for Women Leave Remarks',
            'CLC_UGSLW' =>  'Clinic Special Leave for Women Used',
            'CLC_UGNLAdj'   =>  'Clinic Nuptial Leave Adjustment or New Balance',
            'CLC_UGNLHAWP'  =>  'Clinic Nuptial Hours Absent With Pay',
            'CLC_UGNLRem'   =>  'Clinic Nuptial Leave Remarks',
            'CLC_UGNL'  =>  'Clinic Nuptial Leave Used',
            'UGOBClc'   =>  'Clinic Official Business Used',
            'UGOBClcRem'    =>  'Clinic Official Business Remarks',

        ];
    }

    public function getEmployeeList()
    {
        return $this->hasOne(PayrollEmployeeList::className(), ['EmpID' => 'EmpID']);
    }

    public function getPayPeriod()
    {
        return $this->hasOne(PayrollPayPeriodList::className(), ['PrdID' => 'PrdID']);
    }
}
