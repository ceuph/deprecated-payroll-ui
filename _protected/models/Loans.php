<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SH08_LOANS".
 *
 * @property string $PrdID
 * @property string $EmpID
 * @property string $L_SSSAdj
 * @property string $L_SSSPF
 * @property string $L_SSSHF
 * @property string $L_SSSAdtnlD
 * @property string $L_SSS
 * @property string $L_SSSCAdj
 * @property string $L_SSSCPF
 * @property string $L_SSSCHF
 * @property string $L_SSSCAdtnlD
 * @property string $L_SSSC
 * @property string $L_HDMFAdj
 * @property string $L_HDMFPF
 * @property string $L_HDMFHF
 * @property string $L_HDMFAdtnlD
 * @property string $L_HDMF
 * @property string $L_HDMFMPAdj
 * @property string $L_HDMFMPPF
 * @property string $L_HDMFMPHF
 * @property string $L_HDMFMPAdtnlD
 * @property string $L_HDMFMP
 * @property string $L_HDMFCAdj
 * @property string $L_HDMFCPF
 * @property string $L_HDMFCHF
 * @property string $L_HDMFCAdtnlD
 * @property string $L_HDMFC
 * @property string $L_LOVEMPAdj
 * @property string $L_LOVEMPPF
 * @property string $L_LOVEMPHF
 * @property string $L_LOVEMPAdtnlD
 * @property string $L_LOVEMP
 * @property string $L_FAWUAdj
 * @property string $L_FAWUPF
 * @property string $L_FAWUHF
 * @property string $L_FAWUAdtnlD
 * @property string $L_FAWU
 * @property string $L_HFFAWUAdj
 * @property string $L_HFFAWUPF
 * @property string $L_HFFAWUHF
 * @property string $L_HFFAWUAdtnlD
 * @property string $L_HFFAWU
 * @property string $L_CEUHousingIntAdj
 * @property string $L_CEUHousingIntPF
 * @property string $L_CEUHousingIntHF
 * @property string $L_CEUHousingIntAdtnlD
 * @property string $L_CEUHousingInt
 * @property string $L_CEUHousingPcplAdj
 * @property string $L_CEUHousingPcplPF
 * @property string $L_CEUHousingPcplHF
 * @property string $L_CEUHousingPcplAdtnlD
 * @property string $L_CEUHousingPcpl
 * @property string $L_MedicalAdj
 * @property string $L_MedicalPF
 * @property string $L_MedicalHF
 * @property string $L_MedicalAdtnlD
 * @property string $L_Medical
 * @property string $L_TechnologyAdj
 * @property string $L_TechnologyPF
 * @property string $L_TechnologyHF
 * @property string $L_TechnologyAdtnlD
 * @property string $L_Technology
 * @property string $L_HospitalAdj
 * @property string $L_HospitalPF
 * @property string $L_HospitalHF
 * @property string $L_HospitalAdtnlD
 * @property string $L_Hospital
 * @property string $L_EmergencyAdj
 * @property string $L_EmergencyPF
 * @property string $L_EmergencyHF
 * @property string $L_EmergencyAdtnlD
 * @property string $L_Emergency
 * @property string $L_UnifiedAdj
 * @property string $L_UnifiedPF
 * @property string $L_UnifiedHF
 * @property string $L_UnifiedAdtnlD
 * @property string $L_Unified
 * @property string $L_BDayAdj
 * @property string $L_BDayPF
 * @property string $L_BDayHF
 * @property string $L_BDayAdtnlD
 * @property string $L_BDay
 * @property string $L_TravelAdj
 * @property string $L_TravelPF
 * @property string $L_TravelHF
 * @property string $L_TravelAdtnlD
 * @property string $L_Travel
 * @property string $L_PettyCashAdj
 * @property string $L_PettyCashPF
 * @property string $L_PettyCashHF
 * @property string $L_PettyCashAdtnlD
 * @property string $L_PettyCash
 * @property string $L_SpecialAdj
 * @property string $L_SpecialPF
 * @property string $L_SpecialHF
 * @property string $L_SpecialAdtnlD
 * @property string $L_Special
 * @property string $L_PhilamcareAdj
 * @property string $L_PhilamcarePF
 * @property string $L_PhilamcareHF
 * @property string $L_PhilamcareAdtnlD
 * @property string $L_Philamcare
 * @property string $L_SavingsDepAdj
 * @property string $L_SavingsDepPF
 * @property string $L_SavingsDepHF
 * @property string $L_SavingsDepAdtnlD
 * @property string $L_SavingsDep
 * @property string $L_FixedDepAdj
 * @property string $L_FixedDepPF
 * @property string $L_FixedDepHF
 * @property string $L_FixedDepAdtnlD
 * @property string $L_FixedDep
 * @property string $L_PensionDepAdj
 * @property string $L_PensionDepPF
 * @property string $L_PensionDepHF
 * @property string $L_PensionDepAdtnlD
 * @property string $L_PensionDep
 * @property string $L_SeminarAdj
 * @property string $L_SeminarPF
 * @property string $L_SeminarHF
 * @property string $L_SeminarAdtnlD
 * @property string $L_Seminar
 * @property string $L_CoopAdj
 * @property string $L_CoopPF
 * @property string $L_CoopHF
 * @property string $L_CoopAdtnlD
 * @property string $L_Coop
 * @property string $L_TuitionAdj
 * @property string $L_TuitionPF
 * @property string $L_TuitionHF
 * @property string $L_TuitionAdtnlD
 * @property string $L_Tuition
 * @property string $L_FieldTripAdj
 * @property string $L_FieldTripPF
 * @property string $L_FieldTripHF
 * @property string $L_FieldTripAdtnlD
 * @property string $L_FieldTrip
 * @property string $L_CCLoveAdj
 * @property string $L_CCLovePF
 * @property string $L_CCLoveHF
 * @property string $L_CCLoveAdtnlD
 * @property string $L_CCLove
 * @property string $L_HFCCLoveAdj
 * @property string $L_HFCCLovePF
 * @property string $L_HFCCLoveHF
 * @property string $L_HFCCLoveAdtnlD
 * @property string $L_HFCCLove
 * @property string $L_EuroUSAIntAdj
 * @property string $L_EuroUSAIntPF
 * @property string $L_EuroUSAIntHF
 * @property string $L_EuroUSAIntAdtnlD
 * @property string $L_EuroUSAInt
 * @property string $L_EuroUSAPcplAdj
 * @property string $L_EuroUSAPcplPF
 * @property string $L_EuroUSAPcplHF
 * @property string $L_EuroUSAPcplAdtnlD
 * @property string $L_EuroUSAPcpl
 * @property string $L_HolyLandTourAdj
 * @property string $L_HolyLandTourPF
 * @property string $L_HolyLandTourHF
 * @property string $L_HolyLandTourAdtnlD
 * @property string $L_HolyLandTour
 * @property string $L_HKTravelAdj
 * @property string $L_HKTravelPF
 * @property string $L_HKTravelHF
 * @property string $L_HKTravelAdtnlD
 * @property string $L_HKTravel
 * @property string $L_PAFTETourAdj
 * @property string $L_PAFTETourPF
 * @property string $L_PAFTETourHF
 * @property string $L_PAFTETourAdtnlD
 * @property string $L_PAFTETour
 * @property string $L_AsiaPacConfeAdj
 * @property string $L_AsiaPacConfePF
 * @property string $L_AsiaPacConfeHF
 * @property string $L_AsiaPacConfeAdtnlD
 * @property string $L_AsiaPacConfe
 * @property string $L_ParkingAdj
 * @property string $L_ParkingPF
 * @property string $L_ParkingHF
 * @property string $L_ParkingAdtnlD
 * @property string $L_Parking
 * @property string $L_ComputerAdj
 * @property string $L_ComputerPF
 * @property string $L_ComputerHF
 * @property string $L_ComputerAdtnlD
 * @property string $L_Computer
 * @property string $L_OPBasicAdj
 * @property string $L_OPBasicPF
 * @property string $L_OPBasicHF
 * @property string $L_OPBasicAdtnlD
 * @property string $L_OPBasic
 * @property string $L_OPEFAAdj
 * @property string $L_OPEFAPF
 * @property string $L_OPEFAHF
 * @property string $L_OPEFAAdtnlD
 * @property string $L_OPEFA
 * @property string $L_OPCOLAAdj
 * @property string $L_OPCOLAPF
 * @property string $L_OPCOLAHF
 * @property string $L_OPCOLAAdtnlD
 * @property string $L_OPCOLA
 * @property string $L_AdjTaxAdj
 * @property string $L_AdjTaxPF
 * @property string $L_AdjTaxHF
 * @property string $L_AdjTaxAdtnlD
 * @property string $L_AdjTax
 * @property string $L_AdjTaxSBAdj
 * @property string $L_AdjTaxSBPF
 * @property string $L_AdjTaxSBHF
 * @property string $L_AdjTaxSBAdtnlD
 * @property string $L_AdjTaxSB
 * @property string $L_ALWOPCOLAAdj
 * @property string $L_ALWOPCOLAPF
 * @property string $L_ALWOPCOLAHF
 * @property string $L_ALWOPCOLAAdtnlD
 * @property string $L_ALWOPCOLA
 * @property string $L_ALWOPEFAAdj
 * @property string $L_ALWOPEFAPF
 * @property string $L_ALWOPEFAHF
 * @property string $L_ALWOPEFAAdtnlD
 * @property string $L_ALWOPEFA
 * @property string $L_VaccineAdj
 * @property string $L_VaccinePF
 * @property string $L_VaccineHF
 * @property string $L_VaccineAdtnlD
 * @property string $L_Vaccine
 */
class Loans extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'SH08_LOANS';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PrdID', 'EmpID'], 'required'],
            [['L_SSSAdj', 'L_SSSPF', 'L_SSSHF', 'L_SSSAdtnlD', 'L_SSS', 'L_SSSCAdj', 'L_SSSCPF', 'L_SSSCHF', 'L_SSSCAdtnlD', 'L_SSSC', 'L_HDMFAdj', 'L_HDMFPF', 'L_HDMFHF', 'L_HDMFAdtnlD', 'L_HDMF', 'L_HDMFMPAdj', 'L_HDMFMPPF', 'L_HDMFMPHF', 'L_HDMFMPAdtnlD', 'L_HDMFMP', 'L_HDMFCAdj', 'L_HDMFCPF', 'L_HDMFCHF', 'L_HDMFCAdtnlD', 'L_HDMFC', 'L_LOVEMPAdj', 'L_LOVEMPPF', 'L_LOVEMPHF', 'L_LOVEMPAdtnlD', 'L_LOVEMP', 'L_FAWUAdj', 'L_FAWUPF', 'L_FAWUHF', 'L_FAWUAdtnlD', 'L_FAWU', 'L_HFFAWUAdj', 'L_HFFAWUPF', 'L_HFFAWUHF', 'L_HFFAWUAdtnlD', 'L_HFFAWU', 'L_CEUHousingIntAdj', 'L_CEUHousingIntPF', 'L_CEUHousingIntHF', 'L_CEUHousingIntAdtnlD', 'L_CEUHousingInt', 'L_CEUHousingPcplAdj', 'L_CEUHousingPcplPF', 'L_CEUHousingPcplHF', 'L_CEUHousingPcplAdtnlD', 'L_CEUHousingPcpl', 'L_MedicalAdj', 'L_MedicalPF', 'L_MedicalHF', 'L_MedicalAdtnlD', 'L_Medical', 'L_TechnologyAdj', 'L_TechnologyPF', 'L_TechnologyHF', 'L_TechnologyAdtnlD', 'L_Technology', 'L_HospitalAdj', 'L_HospitalPF', 'L_HospitalHF', 'L_HospitalAdtnlD', 'L_Hospital', 'L_EmergencyAdj', 'L_EmergencyPF', 'L_EmergencyHF', 'L_EmergencyAdtnlD', 'L_Emergency', 'L_UnifiedAdj', 'L_UnifiedPF', 'L_UnifiedHF', 'L_UnifiedAdtnlD', 'L_Unified', 'L_BDayAdj', 'L_BDayPF', 'L_BDayHF', 'L_BDayAdtnlD', 'L_BDay', 'L_TravelAdj', 'L_TravelPF', 'L_TravelHF', 'L_TravelAdtnlD', 'L_Travel', 'L_PettyCashAdj', 'L_PettyCashPF', 'L_PettyCashHF', 'L_PettyCashAdtnlD', 'L_PettyCash', 'L_SpecialAdj', 'L_SpecialPF', 'L_SpecialHF', 'L_SpecialAdtnlD', 'L_Special', 'L_PhilamcareAdj', 'L_PhilamcarePF', 'L_PhilamcareHF', 'L_PhilamcareAdtnlD', 'L_Philamcare', 'L_SavingsDepAdj', 'L_SavingsDepPF', 'L_SavingsDepHF', 'L_SavingsDepAdtnlD', 'L_SavingsDep', 'L_FixedDepAdj', 'L_FixedDepPF', 'L_FixedDepHF', 'L_FixedDepAdtnlD', 'L_FixedDep', 'L_PensionDepAdj', 'L_PensionDepPF', 'L_PensionDepHF', 'L_PensionDepAdtnlD', 'L_PensionDep', 'L_SeminarAdj', 'L_SeminarPF', 'L_SeminarHF', 'L_SeminarAdtnlD', 'L_Seminar', 'L_CoopAdj', 'L_CoopPF', 'L_CoopHF', 'L_CoopAdtnlD', 'L_Coop', 'L_TuitionAdj', 'L_TuitionPF', 'L_TuitionHF', 'L_TuitionAdtnlD', 'L_Tuition', 'L_FieldTripAdj', 'L_FieldTripPF', 'L_FieldTripHF', 'L_FieldTripAdtnlD', 'L_FieldTrip', 'L_CCLoveAdj', 'L_CCLovePF', 'L_CCLoveHF', 'L_CCLoveAdtnlD', 'L_CCLove', 'L_HFCCLoveAdj', 'L_HFCCLovePF', 'L_HFCCLoveHF', 'L_HFCCLoveAdtnlD', 'L_HFCCLove', 'L_EuroUSAIntAdj', 'L_EuroUSAIntPF', 'L_EuroUSAIntHF', 'L_EuroUSAIntAdtnlD', 'L_EuroUSAInt', 'L_EuroUSAPcplAdj', 'L_EuroUSAPcplPF', 'L_EuroUSAPcplHF', 'L_EuroUSAPcplAdtnlD', 'L_EuroUSAPcpl', 'L_HolyLandTourAdj', 'L_HolyLandTourPF', 'L_HolyLandTourHF', 'L_HolyLandTourAdtnlD', 'L_HolyLandTour', 'L_HKTravelAdj', 'L_HKTravelPF', 'L_HKTravelHF', 'L_HKTravelAdtnlD', 'L_HKTravel', 'L_PAFTETourAdj', 'L_PAFTETourPF', 'L_PAFTETourHF', 'L_PAFTETourAdtnlD', 'L_PAFTETour', 'L_AsiaPacConfeAdj', 'L_AsiaPacConfePF', 'L_AsiaPacConfeHF', 'L_AsiaPacConfeAdtnlD', 'L_AsiaPacConfe', 'L_ParkingAdj', 'L_ParkingPF', 'L_ParkingHF', 'L_ParkingAdtnlD', 'L_Parking', 'L_ComputerAdj', 'L_ComputerPF', 'L_ComputerHF', 'L_ComputerAdtnlD', 'L_Computer', 'L_OPBasicAdj', 'L_OPBasicPF', 'L_OPBasicHF', 'L_OPBasicAdtnlD', 'L_OPBasic', 'L_OPEFAAdj', 'L_OPEFAPF', 'L_OPEFAHF', 'L_OPEFAAdtnlD', 'L_OPEFA', 'L_OPCOLAAdj', 'L_OPCOLAPF', 'L_OPCOLAHF', 'L_OPCOLAAdtnlD', 'L_OPCOLA', 'L_AdjTaxAdj', 'L_AdjTaxPF', 'L_AdjTaxHF', 'L_AdjTaxAdtnlD', 'L_AdjTax', 'L_AdjTaxSBAdj', 'L_AdjTaxSBPF', 'L_AdjTaxSBHF', 'L_AdjTaxSBAdtnlD', 'L_AdjTaxSB', 'L_ALWOPCOLAAdj', 'L_ALWOPCOLAPF', 'L_ALWOPCOLAHF', 'L_ALWOPCOLAAdtnlD', 'L_ALWOPCOLA', 'L_ALWOPEFAAdj', 'L_ALWOPEFAPF', 'L_ALWOPEFAHF', 'L_ALWOPEFAAdtnlD', 'L_ALWOPEFA', 'L_VaccineAdj', 'L_VaccinePF', 'L_VaccineHF', 'L_VaccineAdtnlD', 'L_Vaccine'], 'number'],
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
            'L_SSSAdj' => 'SSS Loan Adjustment or New Balance',
            'L_SSSPF' => 'SSS Loan Period Factor',
            'L_SSSHF' => 'SSS Loan Handling Fee',
            'L_SSSAdtnlD' => 'SSS Loan Additional Deduction',
            'L_SSS' => 'SSS Loan Deduction',
            'L_SSSCAdj' => 'SSS Calamity Loan Adjustment or New Balance',
            'L_SSSCPF' => 'SSS Calamity Loan Period Factor',
            'L_SSSCHF' => 'SSS Calamity Loan Handling Fee',
            'L_SSSCAdtnlD' => 'SSS Calamity Loan Additional Deduction',
            'L_SSSC' => 'SSS Calamity Loan Deduction',
            'L_HDMFAdj' => 'HDMF Adjustment or New Balance',
            'L_HDMFPF' => 'HDMF Period Factor',
            'L_HDMFHF' => 'HDMF Handling Fee',
            'L_HDMFAdtnlD' => 'HDMF Additional Deduction',
            'L_HDMF' => 'HDMF Deduction',
            'L_HDMFMPAdj' => 'HDMF Multi Purpose Loan Adjustment or New Balance',
            'L_HDMFMPPF' => 'HDMF Multi Purpose Loan Period Factor',
            'L_HDMFMPHF' => 'HDMF Multi Purpose Loan Handling Fee',
            'L_HDMFMPAdtnlD' => 'HDMF Multi Purpose Loan Additional Deduction',
            'L_HDMFMP' => 'HDMF Multi Purpose Loan Deduction',
            'L_HDMFCAdj' => 'HDMF Calamity Loan Adjustment or New Balance',
            'L_HDMFCPF' => 'HDMF Calamity Loan Period Factor',
            'L_HDMFCHF' => 'HDMF Calamity Loan Handling Fee',
            'L_HDMFCAdtnlD' => 'HDMF Calamity Loan Additional Deduction',
            'L_HDMFC' => 'HDMF Calamity Loan Deduction',
            'L_LOVEMPAdj' => 'LOVE/ Pag-Ibig Multi Purpose Loan Adjustment or New Balance',
            'L_LOVEMPPF' => 'LOVE/ Pag-Ibig Multi Purpose Loan Period Factor',
            'L_LOVEMPHF' => 'LOVE/ Pag-Ibig Multi Purpose Loan Handling Fee',
            'L_LOVEMPAdtnlD' => 'LOVE/ Pag-Ibig Multi Purpose Loan Additional Deduction',
            'L_LOVEMP' => 'LOVE/ Pag-Ibig Multi Purpose Loan Deduction',
            'L_FAWUAdj' => 'FAWU - LOAN Adjustment or New Balance',
            'L_FAWUPF' => 'FAWU - LOAN Period Factor',
            'L_FAWUHF' => 'FAWU - LOAN Handling Fee',
            'L_FAWUAdtnlD' => 'FAWU - LOAN Additional Deduction',
            'L_FAWU' => 'FAWU - LOAN Deduction',
            'L_HFFAWUAdj' => 'Handling Fee FAWU Adjustment or New Balance',
            'L_HFFAWUPF' => 'Handling Fee FAWU Period Factor',
            'L_HFFAWUHF' => 'Handling Fee FAWU Handling Fee',
            'L_HFFAWUAdtnlD' => 'Handling Fee FAWU Additional Deduction',
            'L_HFFAWU' => 'Handling Fee FAWU Deduction',
            'L_CEUHousingIntAdj' => 'Housing Loan Interest Adjustment or New Balance',
            'L_CEUHousingIntPF' => 'Housing Loan Interest Period Factor',
            'L_CEUHousingIntHF' => 'Housing Loan Interest Handling Fee',
            'L_CEUHousingIntAdtnlD' => 'Housing Loan Interest Additional Deduction',
            'L_CEUHousingInt' => 'Housing Loan Interest Deduction',
            'L_CEUHousingPcplAdj' => 'Housing Loan Principal Adjustment or New Balance',
            'L_CEUHousingPcplPF' => 'Housing Loan Principal Period Factor',
            'L_CEUHousingPcplHF' => 'Housing Loan Principal Handling Fee',
            'L_CEUHousingPcplAdtnlD' => 'Housing Loan Principal Additional Deduction',
            'L_CEUHousingPcpl' => 'Housing Loan Principal Deduction',
            'L_MedicalAdj' => 'Medical Loan Adjustment or New Balance',
            'L_MedicalPF' => 'Medical Loan Period Factor',
            'L_MedicalHF' => 'Medical Loan Handling Fee',
            'L_MedicalAdtnlD' => 'Medical Loan Additional Deduction',
            'L_Medical' => 'Medical Loan Deduction',
            'L_TechnologyAdj' => 'Technology Adjustment or New Balance',
            'L_TechnologyPF' => 'Technology Period Factor',
            'L_TechnologyHF' => 'Technology Handling Fee',
            'L_TechnologyAdtnlD' => 'Technology Additional Deduction',
            'L_Technology' => 'Technology Deduction',
            'L_HospitalAdj' => 'Hospital Adjustment or New Balance',
            'L_HospitalPF' => 'Hospital Period Factor',
            'L_HospitalHF' => 'Hospital Handling Fee',
            'L_HospitalAdtnlD' => 'Hospital Additional Deduction',
            'L_Hospital' => 'Hospital Deduction',
            'L_EmergencyAdj' => 'Emergency Loan Adjustment or New Balance',
            'L_EmergencyPF' => 'Emergency Loan Period Factor',
            'L_EmergencyHF' => 'Emergency Loan Handling Fee',
            'L_EmergencyAdtnlD' => 'Emergency Loan Additional Deduction',
            'L_Emergency' => 'Emergency Loan Deduction',
            'L_UnifiedAdj' => 'Unified Adjustment or New Balance',
            'L_UnifiedPF' => 'Unified Period Factor',
            'L_UnifiedHF' => 'Unified Handling Fee',
            'L_UnifiedAdtnlD' => 'Unified Additional Deduction',
            'L_Unified' => 'Unified Deduction',
            'L_BDayAdj' => 'B-Day Loan Adjustment or New Balance',
            'L_BDayPF' => 'B-Day Loan Period Factor',
            'L_BDayHF' => 'B-Day Loan Handling Fee',
            'L_BDayAdtnlD' => 'B-Day Loan Additional Deduction',
            'L_BDay' => 'B-Day Loan Deduction',
            'L_TravelAdj' => 'Travel Loan (Europe, Holy Land, etc.) Adjustment or New Balance',
            'L_TravelPF' => 'Travel Loan (Europe, Holy Land, etc.) Period Factor',
            'L_TravelHF' => 'Travel Loan (Europe, Holy Land, etc.) Handling Fee',
            'L_TravelAdtnlD' => 'Travel Loan (Europe, Holy Land, etc.) Additional Deduction',
            'L_Travel' => 'Travel Loan (Europe, Holy Land, etc.) Deduction',
            'L_PettyCashAdj' => 'Petty Cash Adjustment or New Balance',
            'L_PettyCashPF' => 'Petty Cash Period Factor',
            'L_PettyCashHF' => 'Petty Cash Handling Fee',
            'L_PettyCashAdtnlD' => 'Petty Cash Additional Deduction',
            'L_PettyCash' => 'Petty Cash Deduction',
            'L_SpecialAdj' => 'Special Assistance Adjustment or New Balance',
            'L_SpecialPF' => 'Special Assistance Period Factor',
            'L_SpecialHF' => 'Special Assistance Handling Fee',
            'L_SpecialAdtnlD' => 'Special Assistance Additional Deduction',
            'L_Special' => 'Special Assistance Deduction',
            'L_PhilamcareAdj' => 'Philam Care Adjustment or New Balance',
            'L_PhilamcarePF' => 'Philam Care Period Factor',
            'L_PhilamcareHF' => 'Philam Care Handling Fee',
            'L_PhilamcareAdtnlD' => 'Philam Care Additional Deduction',
            'L_Philamcare' => 'Philam Care Deduction',
            'L_SavingsDepAdj' => 'Saving Deposit Adjustment or New Balance',
            'L_SavingsDepPF' => 'Saving Deposit Period Factor',
            'L_SavingsDepHF' => 'Saving Deposit Handling Fee',
            'L_SavingsDepAdtnlD' => 'Saving Deposit Additional Deduction',
            'L_SavingsDep' => 'Saving Deposit Deduction',
            'L_FixedDepAdj' => 'Fixed Deposit Adjustment or New Balance',
            'L_FixedDepPF' => 'Fixed Deposit Period Factor',
            'L_FixedDepHF' => 'Fixed Deposit Handling Fee',
            'L_FixedDepAdtnlD' => 'Fixed Deposit Additional Deduction',
            'L_FixedDep' => 'Fixed Deposit Deduction',
            'L_PensionDepAdj' => 'Pension Deposit Adjustment or New Balance',
            'L_PensionDepPF' => 'Pension Deposit Period Factor',
            'L_PensionDepHF' => 'Pension Deposit Handling Fee',
            'L_PensionDepAdtnlD' => 'Pension Deposit Additional Deduction',
            'L_PensionDep' => 'Pension Deposit Deduction',
            'L_SeminarAdj' => 'Seminar Adjustment or New Balance',
            'L_SeminarPF' => 'Seminar Period Factor',
            'L_SeminarHF' => 'Seminar Handling Fee',
            'L_SeminarAdtnlD' => 'Seminar Additional Deduction',
            'L_Seminar' => 'Seminar Deduction',
            'L_CoopAdj' => 'Coop Adjustment or New Balance',
            'L_CoopPF' => 'Coop Period Factor',
            'L_CoopHF' => 'Coop Handling Fee',
            'L_CoopAdtnlD' => 'Coop Additional Deduction',
            'L_Coop' => 'Coop Deduction',
            'L_TuitionAdj' => 'Tuition Adjustment or New Balance',
            'L_TuitionPF' => 'Tuition Period Factor',
            'L_TuitionHF' => 'Tuition Handling Fee',
            'L_TuitionAdtnlD' => 'Tuition Additional Deduction',
            'L_Tuition' => 'Tuition Deduction',
            'L_FieldTripAdj' => 'FIELD TRIP Adjustment or New Balance',
            'L_FieldTripPF' => 'FIELD TRIP Period Factor',
            'L_FieldTripHF' => 'FIELD TRIP Handling Fee',
            'L_FieldTripAdtnlD' => 'FIELD TRIP Additional Deduction',
            'L_FieldTrip' => 'FIELD TRIP Deduction',
            'L_CCLoveAdj' => 'CC MP LOAN / LOVE LOAN Adjustment or New Balance',
            'L_CCLovePF' => 'CC MP LOAN / LOVE LOAN Period Factor',
            'L_CCLoveHF' => 'CC MP LOAN / LOVE LOAN Handling Fee',
            'L_CCLoveAdtnlD' => 'CC MP LOAN / LOVE LOAN Additional Deduction',
            'L_CCLove' => 'CC MP LOAN / LOVE LOAN Deduction',
            'L_HFCCLoveAdj' => 'Handling Fee CC / LOVE LOAN Adjustment or New Balance',
            'L_HFCCLovePF' => 'Handling Fee CC / LOVE LOAN Period Factor',
            'L_HFCCLoveHF' => 'Handling Fee CC / LOVE LOAN Handling Fee',
            'L_HFCCLoveAdtnlD' => 'Handling Fee CC / LOVE LOAN Additional Deduction',
            'L_HFCCLove' => 'Handling Fee CC / LOVE LOAN Deduction',
            'L_EuroUSAIntAdj' => 'EUROPE/USA T (INT) Adjustment or New Balance',
            'L_EuroUSAIntPF' => 'EUROPE/USA T (INT) Period Factor',
            'L_EuroUSAIntHF' => 'EUROPE/USA T (INT) Handling Fee',
            'L_EuroUSAIntAdtnlD' => 'EUROPE/USA T (INT) Additional Deduction',
            'L_EuroUSAInt' => 'EUROPE/USA T (INT) Deduction',
            'L_EuroUSAPcplAdj' => 'EUROPE/USA T (PRIN\'L) Adjustment or New Balance',
            'L_EuroUSAPcplPF' => 'EUROPE/USA T (PRIN\'L) Period Factor',
            'L_EuroUSAPcplHF' => 'EUROPE/USA T (PRIN\'L) Handling Fee',
            'L_EuroUSAPcplAdtnlD' => 'EUROPE/USA T (PRIN\'L) Additional Deduction',
            'L_EuroUSAPcpl' => 'EUROPE/USA T (PRIN\'L) Deduction',
            'L_HolyLandTourAdj' => 'HOLY LAND TOUR Adjustment or New Balance',
            'L_HolyLandTourPF' => 'HOLY LAND TOUR Period Factor',
            'L_HolyLandTourHF' => 'HOLY LAND TOUR Handling Fee',
            'L_HolyLandTourAdtnlD' => 'HOLY LAND TOUR Additional Deduction',
            'L_HolyLandTour' => 'HOLY LAND TOUR Deduction',
            'L_HKTravelAdj' => 'HONGKONG TRAVEL LOAN Adjustment or New Balance',
            'L_HKTravelPF' => 'HONGKONG TRAVEL LOAN Period Factor',
            'L_HKTravelHF' => 'HONGKONG TRAVEL LOAN Handling Fee',
            'L_HKTravelAdtnlD' => 'HONGKONG TRAVEL LOAN Additional Deduction',
            'L_HKTravel' => 'HONGKONG TRAVEL LOAN Deduction',
            'L_PAFTETourAdj' => 'PAFTE STUDY TOUR Adjustment or New Balance',
            'L_PAFTETourPF' => 'PAFTE STUDY TOUR Period Factor',
            'L_PAFTETourHF' => 'PAFTE STUDY TOUR Handling Fee',
            'L_PAFTETourAdtnlD' => 'PAFTE STUDY TOUR Additional Deduction',
            'L_PAFTETour' => 'PAFTE STUDY TOUR Deduction',
            'L_AsiaPacConfeAdj' => 'ASIA PACIFIC CONFERENCE Adjustment or New Balance',
            'L_AsiaPacConfePF' => 'ASIA PACIFIC CONFERENCE Period Factor',
            'L_AsiaPacConfeHF' => 'ASIA PACIFIC CONFERENCE Handling Fee',
            'L_AsiaPacConfeAdtnlD' => 'ASIA PACIFIC CONFERENCE Additional Deduction',
            'L_AsiaPacConfe' => 'ASIA PACIFIC CONFERENCE Deduction',
            'L_ParkingAdj' => 'PARKING FEE Adjustment or New Balance',
            'L_ParkingPF' => 'PARKING FEE Period Factor',
            'L_ParkingHF' => 'PARKING FEE Handling Fee',
            'L_ParkingAdtnlD' => 'PARKING FEE Additional Deduction',
            'L_Parking' => 'PARKING FEE Deduction',
            'L_ComputerAdj' => 'COMPUTER Adjustment or New Balance',
            'L_ComputerPF' => 'COMPUTER Period Factor',
            'L_ComputerHF' => 'COMPUTER Handling Fee',
            'L_ComputerAdtnlD' => 'COMPUTER Additional Deduction',
            'L_Computer' => 'COMPUTER Deduction',
            'L_OPBasicAdj' => 'OVERPAYMENT BASIC Adjustment or New Balance',
            'L_OPBasicPF' => 'OVERPAYMENT BASIC Period Factor',
            'L_OPBasicHF' => 'OVERPAYMENT BASIC Handling Fee',
            'L_OPBasicAdtnlD' => 'OVERPAYMENT BASIC Additional Deduction',
            'L_OPBasic' => 'OVERPAYMENT BASIC Deduction',
            'L_OPEFAAdj' => 'OVERPAYMENT EFA Adjustment or New Balance',
            'L_OPEFAPF' => 'OVERPAYMENT EFA Period Factor',
            'L_OPEFAHF' => 'OVERPAYMENT EFA Handling Fee',
            'L_OPEFAAdtnlD' => 'OVERPAYMENT EFA Additional Deduction',
            'L_OPEFA' => 'OVERPAYMENT EFA Deduction',
            'L_OPCOLAAdj' => 'OVERPAYMENT - COLA Adjustment or New Balance',
            'L_OPCOLAPF' => 'OVERPAYMENT - COLA Period Factor',
            'L_OPCOLAHF' => 'OVERPAYMENT - COLA Handling Fee',
            'L_OPCOLAAdtnlD' => 'OVERPAYMENT - COLA Additional Deduction',
            'L_OPCOLA' => 'OVERPAYMENT - COLA Deduction',
            'L_AdjTaxAdj' => 'TAX ADJUSTMENT Adjustment or New Balance',
            'L_AdjTaxPF' => 'TAX ADJUSTMENT Period Factor',
            'L_AdjTaxHF' => 'TAX ADJUSTMENT Handling Fee',
            'L_AdjTaxAdtnlD' => 'TAX ADJUSTMENT Additional Deduction',
            'L_AdjTax' => 'TAX ADJUSTMENT Deduction',
            'L_AdjTaxSBAdj' => 'TAX - SIGNING BONUS Adjustment or New Balance',
            'L_AdjTaxSBPF' => 'TAX - SIGNING BONUS Period Factor',
            'L_AdjTaxSBHF' => 'TAX - SIGNING BONUS Handling Fee',
            'L_AdjTaxSBAdtnlD' => 'TAX - SIGNING BONUS Additional Deduction',
            'L_AdjTaxSB' => 'TAX - SIGNING BONUS Deduction',
            'L_ALWOPCOLAAdj' => 'ALWOP - COLA Adjustment or New Balance',
            'L_ALWOPCOLAPF' => 'ALWOP - COLA Period Factor',
            'L_ALWOPCOLAHF' => 'ALWOP - COLA Handling Fee',
            'L_ALWOPCOLAAdtnlD' => 'ALWOP - COLA Additional Deduction',
            'L_ALWOPCOLA' => 'ALWOP - COLA Deduction',
            'L_ALWOPEFAAdj' => 'ALWOP-EFA Adjustment or New Balance',
            'L_ALWOPEFAPF' => 'ALWOP-EFA Period Factor',
            'L_ALWOPEFAHF' => 'ALWOP-EFA Handling Fee',
            'L_ALWOPEFAAdtnlD' => 'ALWOP-EFA Additional Deduction',
            'L_ALWOPEFA' => 'ALWOP-EFA Deduction',
            'L_VaccineAdj' => 'VACCINE ( FLU, HEPA ) Adjustment or New Balance',
            'L_VaccinePF' => 'VACCINE ( FLU, HEPA ) Period Factor',
            'L_VaccineHF' => 'VACCINE ( FLU, HEPA ) Handling Fee',
            'L_VaccineAdtnlD' => 'VACCINE ( FLU, HEPA ) Additional Deduction',
            'L_Vaccine' => 'VACCINE ( FLU, HEPA ) Deduction',
        ];
    }
}