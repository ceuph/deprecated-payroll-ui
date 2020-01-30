<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Loans;

/**
 * LoansSearch represents the model behind the search form of `app\models\Loans`.
 */
class LoansSearch extends Loans
{
    /**
     * {@inheritdoc}
     */
    public $fname;
    public $lname;
    public $schoolCollege;
    public $campus;
    public $department;

    public function rules()
    {
        return [
            [['PrdID', 'EmpID','fname','campus','lname','schoolCollege','department'], 'safe'],
            [['L_SSSAdj', 'L_SSSPF', 'L_SSSHF', 'L_SSSAdtnlD', 'L_SSS', 'L_SSSCAdj', 'L_SSSCPF', 'L_SSSCHF', 'L_SSSCAdtnlD', 'L_SSSC', 'L_HDMFAdj', 'L_HDMFPF', 'L_HDMFHF', 'L_HDMFAdtnlD', 'L_HDMF', 'L_HDMFMPAdj', 'L_HDMFMPPF', 'L_HDMFMPHF', 'L_HDMFMPAdtnlD', 'L_HDMFMP', 'L_HDMFCAdj', 'L_HDMFCPF', 'L_HDMFCHF', 'L_HDMFCAdtnlD', 'L_HDMFC', 'L_LOVEMPAdj', 'L_LOVEMPPF', 'L_LOVEMPHF', 'L_LOVEMPAdtnlD', 'L_LOVEMP', 'L_FAWUAdj', 'L_FAWUPF', 'L_FAWUHF', 'L_FAWUAdtnlD', 'L_FAWU', 'L_HFFAWUAdj', 'L_HFFAWUPF', 'L_HFFAWUHF', 'L_HFFAWUAdtnlD', 'L_HFFAWU', 'L_CEUHousingIntAdj', 'L_CEUHousingIntPF', 'L_CEUHousingIntHF', 'L_CEUHousingIntAdtnlD', 'L_CEUHousingInt', 'L_CEUHousingPcplAdj', 'L_CEUHousingPcplPF', 'L_CEUHousingPcplHF', 'L_CEUHousingPcplAdtnlD', 'L_CEUHousingPcpl', 'L_MedicalAdj', 'L_MedicalPF', 'L_MedicalHF', 'L_MedicalAdtnlD', 'L_Medical', 'L_TechnologyAdj', 'L_TechnologyPF', 'L_TechnologyHF', 'L_TechnologyAdtnlD', 'L_Technology', 'L_HospitalAdj', 'L_HospitalPF', 'L_HospitalHF', 'L_HospitalAdtnlD', 'L_Hospital', 'L_EmergencyAdj', 'L_EmergencyPF', 'L_EmergencyHF', 'L_EmergencyAdtnlD', 'L_Emergency', 'L_UnifiedAdj', 'L_UnifiedPF', 'L_UnifiedHF', 'L_UnifiedAdtnlD', 'L_Unified', 'L_BDayAdj', 'L_BDayPF', 'L_BDayHF', 'L_BDayAdtnlD', 'L_BDay', 'L_TravelAdj', 'L_TravelPF', 'L_TravelHF', 'L_TravelAdtnlD', 'L_Travel', 'L_PettyCashAdj', 'L_PettyCashPF', 'L_PettyCashHF', 'L_PettyCashAdtnlD', 'L_PettyCash', 'L_SpecialAdj', 'L_SpecialPF', 'L_SpecialHF', 'L_SpecialAdtnlD', 'L_Special', 'L_PhilamcareAdj', 'L_PhilamcarePF', 'L_PhilamcareHF', 'L_PhilamcareAdtnlD', 'L_Philamcare', 'L_SavingsDepAdj', 'L_SavingsDepPF', 'L_SavingsDepHF', 'L_SavingsDepAdtnlD', 'L_SavingsDep', 'L_FixedDepAdj', 'L_FixedDepPF', 'L_FixedDepHF', 'L_FixedDepAdtnlD', 'L_FixedDep', 'L_PensionDepAdj', 'L_PensionDepPF', 'L_PensionDepHF', 'L_PensionDepAdtnlD', 'L_PensionDep', 'L_SeminarAdj', 'L_SeminarPF', 'L_SeminarHF', 'L_SeminarAdtnlD', 'L_Seminar', 'L_CoopAdj', 'L_CoopPF', 'L_CoopHF', 'L_CoopAdtnlD', 'L_Coop', 'L_TuitionAdj', 'L_TuitionPF', 'L_TuitionHF', 'L_TuitionAdtnlD', 'L_Tuition', 'L_FieldTripAdj', 'L_FieldTripPF', 'L_FieldTripHF', 'L_FieldTripAdtnlD', 'L_FieldTrip', 'L_CCLoveAdj', 'L_CCLovePF', 'L_CCLoveHF', 'L_CCLoveAdtnlD', 'L_CCLove', 'L_HFCCLoveAdj', 'L_HFCCLovePF', 'L_HFCCLoveHF', 'L_HFCCLoveAdtnlD', 'L_HFCCLove', 'L_EuroUSAIntAdj', 'L_EuroUSAIntPF', 'L_EuroUSAIntHF', 'L_EuroUSAIntAdtnlD', 'L_EuroUSAInt', 'L_EuroUSAPcplAdj', 'L_EuroUSAPcplPF', 'L_EuroUSAPcplHF', 'L_EuroUSAPcplAdtnlD', 'L_EuroUSAPcpl', 'L_HolyLandTourAdj', 'L_HolyLandTourPF', 'L_HolyLandTourHF', 'L_HolyLandTourAdtnlD', 'L_HolyLandTour', 'L_HKTravelAdj', 'L_HKTravelPF', 'L_HKTravelHF', 'L_HKTravelAdtnlD', 'L_HKTravel', 'L_PAFTETourAdj', 'L_PAFTETourPF', 'L_PAFTETourHF', 'L_PAFTETourAdtnlD', 'L_PAFTETour', 'L_AsiaPacConfeAdj', 'L_AsiaPacConfePF', 'L_AsiaPacConfeHF', 'L_AsiaPacConfeAdtnlD', 'L_AsiaPacConfe', 'L_ParkingAdj', 'L_ParkingPF', 'L_ParkingHF', 'L_ParkingAdtnlD', 'L_Parking', 'L_ComputerAdj', 'L_ComputerPF', 'L_ComputerHF', 'L_ComputerAdtnlD', 'L_Computer', 'L_OPBasicAdj', 'L_OPBasicPF', 'L_OPBasicHF', 'L_OPBasicAdtnlD', 'L_OPBasic', 'L_OPEFAAdj', 'L_OPEFAPF', 'L_OPEFAHF', 'L_OPEFAAdtnlD', 'L_OPEFA', 'L_OPCOLAAdj', 'L_OPCOLAPF', 'L_OPCOLAHF', 'L_OPCOLAAdtnlD', 'L_OPCOLA', 'L_AdjTaxAdj', 'L_AdjTaxPF', 'L_AdjTaxHF', 'L_AdjTaxAdtnlD', 'L_AdjTax', 'L_AdjTaxSBAdj', 'L_AdjTaxSBPF', 'L_AdjTaxSBHF', 'L_AdjTaxSBAdtnlD', 'L_AdjTaxSB', 'L_ALWOPCOLAAdj', 'L_ALWOPCOLAPF', 'L_ALWOPCOLAHF', 'L_ALWOPCOLAAdtnlD', 'L_ALWOPCOLA', 'L_ALWOPEFAAdj', 'L_ALWOPEFAPF', 'L_ALWOPEFAHF', 'L_ALWOPEFAAdtnlD', 'L_ALWOPEFA', 'L_VaccineAdj', 'L_VaccinePF', 'L_VaccineHF', 'L_VaccineAdtnlD', 'L_Vaccine'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Loans::find()->joinWith(['employeeList']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,

        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $dataProvider->setSort([
        'attributes' => [
            'PrdID' => [
                'asc' => ['PrdID' => SORT_ASC],
                'desc' => ['PrdID' => SORT_DESC],
                'default' => SORT_DESC,
            ],
            'EmpID' => [
                'asc' => ['EmpID' => SORT_ASC],
                'desc' => ['EmpID' => SORT_DESC],
                'default' => SORT_ASC
            ],
            'lname' => [
                'asc' => ['lname' => SORT_ASC],
                'desc' => ['lname' => SORT_DESC],
                'default' => SORT_ASC
            ],
            'fname' => [
                'asc' => ['fname' => SORT_ASC],
                'desc' => ['fname' => SORT_DESC],
                'default' => SORT_ASC,
            ],
            'campus' => [
                'asc' => ['campus' => SORT_ASC],
                'desc' => ['campus' => SORT_DESC],
                'default' => SORT_ASC,
            ],
            'schoolCollege' => [
                'asc' => ['schoolCollege' => SORT_ASC],
                'desc' => ['schoolCollege' => SORT_DESC],
                'default' => SORT_ASC,
            ],
            'department' => [
                'asc' => ['department' => SORT_ASC],
                'desc' => ['department' => SORT_DESC],
                'default' => SORT_ASC,
            ],
    
        ],

    ]);

        // grid filtering conditions
        $query->andFilterWhere([
            'L_SSSAdj' => $this->L_SSSAdj,
            'L_SSSPF' => $this->L_SSSPF,
            'L_SSSHF' => $this->L_SSSHF,
            'L_SSSAdtnlD' => $this->L_SSSAdtnlD,
            'L_SSS' => $this->L_SSS,
            'L_SSSCAdj' => $this->L_SSSCAdj,
            'L_SSSCPF' => $this->L_SSSCPF,
            'L_SSSCHF' => $this->L_SSSCHF,
            'L_SSSCAdtnlD' => $this->L_SSSCAdtnlD,
            'L_SSSC' => $this->L_SSSC,
            'L_HDMFAdj' => $this->L_HDMFAdj,
            'L_HDMFPF' => $this->L_HDMFPF,
            'L_HDMFHF' => $this->L_HDMFHF,
            'L_HDMFAdtnlD' => $this->L_HDMFAdtnlD,
            'L_HDMF' => $this->L_HDMF,
            'L_HDMFMPAdj' => $this->L_HDMFMPAdj,
            'L_HDMFMPPF' => $this->L_HDMFMPPF,
            'L_HDMFMPHF' => $this->L_HDMFMPHF,
            'L_HDMFMPAdtnlD' => $this->L_HDMFMPAdtnlD,
            'L_HDMFMP' => $this->L_HDMFMP,
            'L_HDMFCAdj' => $this->L_HDMFCAdj,
            'L_HDMFCPF' => $this->L_HDMFCPF,
            'L_HDMFCHF' => $this->L_HDMFCHF,
            'L_HDMFCAdtnlD' => $this->L_HDMFCAdtnlD,
            'L_HDMFC' => $this->L_HDMFC,
            'L_LOVEMPAdj' => $this->L_LOVEMPAdj,
            'L_LOVEMPPF' => $this->L_LOVEMPPF,
            'L_LOVEMPHF' => $this->L_LOVEMPHF,
            'L_LOVEMPAdtnlD' => $this->L_LOVEMPAdtnlD,
            'L_LOVEMP' => $this->L_LOVEMP,
            'L_FAWUAdj' => $this->L_FAWUAdj,
            'L_FAWUPF' => $this->L_FAWUPF,
            'L_FAWUHF' => $this->L_FAWUHF,
            'L_FAWUAdtnlD' => $this->L_FAWUAdtnlD,
            'L_FAWU' => $this->L_FAWU,
            'L_HFFAWUAdj' => $this->L_HFFAWUAdj,
            'L_HFFAWUPF' => $this->L_HFFAWUPF,
            'L_HFFAWUHF' => $this->L_HFFAWUHF,
            'L_HFFAWUAdtnlD' => $this->L_HFFAWUAdtnlD,
            'L_HFFAWU' => $this->L_HFFAWU,
            'L_CEUHousingIntAdj' => $this->L_CEUHousingIntAdj,
            'L_CEUHousingIntPF' => $this->L_CEUHousingIntPF,
            'L_CEUHousingIntHF' => $this->L_CEUHousingIntHF,
            'L_CEUHousingIntAdtnlD' => $this->L_CEUHousingIntAdtnlD,
            'L_CEUHousingInt' => $this->L_CEUHousingInt,
            'L_CEUHousingPcplAdj' => $this->L_CEUHousingPcplAdj,
            'L_CEUHousingPcplPF' => $this->L_CEUHousingPcplPF,
            'L_CEUHousingPcplHF' => $this->L_CEUHousingPcplHF,
            'L_CEUHousingPcplAdtnlD' => $this->L_CEUHousingPcplAdtnlD,
            'L_CEUHousingPcpl' => $this->L_CEUHousingPcpl,
            'L_MedicalAdj' => $this->L_MedicalAdj,
            'L_MedicalPF' => $this->L_MedicalPF,
            'L_MedicalHF' => $this->L_MedicalHF,
            'L_MedicalAdtnlD' => $this->L_MedicalAdtnlD,
            'L_Medical' => $this->L_Medical,
            'L_TechnologyAdj' => $this->L_TechnologyAdj,
            'L_TechnologyPF' => $this->L_TechnologyPF,
            'L_TechnologyHF' => $this->L_TechnologyHF,
            'L_TechnologyAdtnlD' => $this->L_TechnologyAdtnlD,
            'L_Technology' => $this->L_Technology,
            'L_HospitalAdj' => $this->L_HospitalAdj,
            'L_HospitalPF' => $this->L_HospitalPF,
            'L_HospitalHF' => $this->L_HospitalHF,
            'L_HospitalAdtnlD' => $this->L_HospitalAdtnlD,
            'L_Hospital' => $this->L_Hospital,
            'L_EmergencyAdj' => $this->L_EmergencyAdj,
            'L_EmergencyPF' => $this->L_EmergencyPF,
            'L_EmergencyHF' => $this->L_EmergencyHF,
            'L_EmergencyAdtnlD' => $this->L_EmergencyAdtnlD,
            'L_Emergency' => $this->L_Emergency,
            'L_UnifiedAdj' => $this->L_UnifiedAdj,
            'L_UnifiedPF' => $this->L_UnifiedPF,
            'L_UnifiedHF' => $this->L_UnifiedHF,
            'L_UnifiedAdtnlD' => $this->L_UnifiedAdtnlD,
            'L_Unified' => $this->L_Unified,
            'L_BDayAdj' => $this->L_BDayAdj,
            'L_BDayPF' => $this->L_BDayPF,
            'L_BDayHF' => $this->L_BDayHF,
            'L_BDayAdtnlD' => $this->L_BDayAdtnlD,
            'L_BDay' => $this->L_BDay,
            'L_TravelAdj' => $this->L_TravelAdj,
            'L_TravelPF' => $this->L_TravelPF,
            'L_TravelHF' => $this->L_TravelHF,
            'L_TravelAdtnlD' => $this->L_TravelAdtnlD,
            'L_Travel' => $this->L_Travel,
            'L_PettyCashAdj' => $this->L_PettyCashAdj,
            'L_PettyCashPF' => $this->L_PettyCashPF,
            'L_PettyCashHF' => $this->L_PettyCashHF,
            'L_PettyCashAdtnlD' => $this->L_PettyCashAdtnlD,
            'L_PettyCash' => $this->L_PettyCash,
            'L_SpecialAdj' => $this->L_SpecialAdj,
            'L_SpecialPF' => $this->L_SpecialPF,
            'L_SpecialHF' => $this->L_SpecialHF,
            'L_SpecialAdtnlD' => $this->L_SpecialAdtnlD,
            'L_Special' => $this->L_Special,
            'L_PhilamcareAdj' => $this->L_PhilamcareAdj,
            'L_PhilamcarePF' => $this->L_PhilamcarePF,
            'L_PhilamcareHF' => $this->L_PhilamcareHF,
            'L_PhilamcareAdtnlD' => $this->L_PhilamcareAdtnlD,
            'L_Philamcare' => $this->L_Philamcare,
            'L_SavingsDepAdj' => $this->L_SavingsDepAdj,
            'L_SavingsDepPF' => $this->L_SavingsDepPF,
            'L_SavingsDepHF' => $this->L_SavingsDepHF,
            'L_SavingsDepAdtnlD' => $this->L_SavingsDepAdtnlD,
            'L_SavingsDep' => $this->L_SavingsDep,
            'L_FixedDepAdj' => $this->L_FixedDepAdj,
            'L_FixedDepPF' => $this->L_FixedDepPF,
            'L_FixedDepHF' => $this->L_FixedDepHF,
            'L_FixedDepAdtnlD' => $this->L_FixedDepAdtnlD,
            'L_FixedDep' => $this->L_FixedDep,
            'L_PensionDepAdj' => $this->L_PensionDepAdj,
            'L_PensionDepPF' => $this->L_PensionDepPF,
            'L_PensionDepHF' => $this->L_PensionDepHF,
            'L_PensionDepAdtnlD' => $this->L_PensionDepAdtnlD,
            'L_PensionDep' => $this->L_PensionDep,
            'L_SeminarAdj' => $this->L_SeminarAdj,
            'L_SeminarPF' => $this->L_SeminarPF,
            'L_SeminarHF' => $this->L_SeminarHF,
            'L_SeminarAdtnlD' => $this->L_SeminarAdtnlD,
            'L_Seminar' => $this->L_Seminar,
            'L_CoopAdj' => $this->L_CoopAdj,
            'L_CoopPF' => $this->L_CoopPF,
            'L_CoopHF' => $this->L_CoopHF,
            'L_CoopAdtnlD' => $this->L_CoopAdtnlD,
            'L_Coop' => $this->L_Coop,
            'L_TuitionAdj' => $this->L_TuitionAdj,
            'L_TuitionPF' => $this->L_TuitionPF,
            'L_TuitionHF' => $this->L_TuitionHF,
            'L_TuitionAdtnlD' => $this->L_TuitionAdtnlD,
            'L_Tuition' => $this->L_Tuition,
            'L_FieldTripAdj' => $this->L_FieldTripAdj,
            'L_FieldTripPF' => $this->L_FieldTripPF,
            'L_FieldTripHF' => $this->L_FieldTripHF,
            'L_FieldTripAdtnlD' => $this->L_FieldTripAdtnlD,
            'L_FieldTrip' => $this->L_FieldTrip,
            'L_CCLoveAdj' => $this->L_CCLoveAdj,
            'L_CCLovePF' => $this->L_CCLovePF,
            'L_CCLoveHF' => $this->L_CCLoveHF,
            'L_CCLoveAdtnlD' => $this->L_CCLoveAdtnlD,
            'L_CCLove' => $this->L_CCLove,
            'L_HFCCLoveAdj' => $this->L_HFCCLoveAdj,
            'L_HFCCLovePF' => $this->L_HFCCLovePF,
            'L_HFCCLoveHF' => $this->L_HFCCLoveHF,
            'L_HFCCLoveAdtnlD' => $this->L_HFCCLoveAdtnlD,
            'L_HFCCLove' => $this->L_HFCCLove,
            'L_EuroUSAIntAdj' => $this->L_EuroUSAIntAdj,
            'L_EuroUSAIntPF' => $this->L_EuroUSAIntPF,
            'L_EuroUSAIntHF' => $this->L_EuroUSAIntHF,
            'L_EuroUSAIntAdtnlD' => $this->L_EuroUSAIntAdtnlD,
            'L_EuroUSAInt' => $this->L_EuroUSAInt,
            'L_EuroUSAPcplAdj' => $this->L_EuroUSAPcplAdj,
            'L_EuroUSAPcplPF' => $this->L_EuroUSAPcplPF,
            'L_EuroUSAPcplHF' => $this->L_EuroUSAPcplHF,
            'L_EuroUSAPcplAdtnlD' => $this->L_EuroUSAPcplAdtnlD,
            'L_EuroUSAPcpl' => $this->L_EuroUSAPcpl,
            'L_HolyLandTourAdj' => $this->L_HolyLandTourAdj,
            'L_HolyLandTourPF' => $this->L_HolyLandTourPF,
            'L_HolyLandTourHF' => $this->L_HolyLandTourHF,
            'L_HolyLandTourAdtnlD' => $this->L_HolyLandTourAdtnlD,
            'L_HolyLandTour' => $this->L_HolyLandTour,
            'L_HKTravelAdj' => $this->L_HKTravelAdj,
            'L_HKTravelPF' => $this->L_HKTravelPF,
            'L_HKTravelHF' => $this->L_HKTravelHF,
            'L_HKTravelAdtnlD' => $this->L_HKTravelAdtnlD,
            'L_HKTravel' => $this->L_HKTravel,
            'L_PAFTETourAdj' => $this->L_PAFTETourAdj,
            'L_PAFTETourPF' => $this->L_PAFTETourPF,
            'L_PAFTETourHF' => $this->L_PAFTETourHF,
            'L_PAFTETourAdtnlD' => $this->L_PAFTETourAdtnlD,
            'L_PAFTETour' => $this->L_PAFTETour,
            'L_AsiaPacConfeAdj' => $this->L_AsiaPacConfeAdj,
            'L_AsiaPacConfePF' => $this->L_AsiaPacConfePF,
            'L_AsiaPacConfeHF' => $this->L_AsiaPacConfeHF,
            'L_AsiaPacConfeAdtnlD' => $this->L_AsiaPacConfeAdtnlD,
            'L_AsiaPacConfe' => $this->L_AsiaPacConfe,
            'L_ParkingAdj' => $this->L_ParkingAdj,
            'L_ParkingPF' => $this->L_ParkingPF,
            'L_ParkingHF' => $this->L_ParkingHF,
            'L_ParkingAdtnlD' => $this->L_ParkingAdtnlD,
            'L_Parking' => $this->L_Parking,
            'L_ComputerAdj' => $this->L_ComputerAdj,
            'L_ComputerPF' => $this->L_ComputerPF,
            'L_ComputerHF' => $this->L_ComputerHF,
            'L_ComputerAdtnlD' => $this->L_ComputerAdtnlD,
            'L_Computer' => $this->L_Computer,
            'L_OPBasicAdj' => $this->L_OPBasicAdj,
            'L_OPBasicPF' => $this->L_OPBasicPF,
            'L_OPBasicHF' => $this->L_OPBasicHF,
            'L_OPBasicAdtnlD' => $this->L_OPBasicAdtnlD,
            'L_OPBasic' => $this->L_OPBasic,
            'L_OPEFAAdj' => $this->L_OPEFAAdj,
            'L_OPEFAPF' => $this->L_OPEFAPF,
            'L_OPEFAHF' => $this->L_OPEFAHF,
            'L_OPEFAAdtnlD' => $this->L_OPEFAAdtnlD,
            'L_OPEFA' => $this->L_OPEFA,
            'L_OPCOLAAdj' => $this->L_OPCOLAAdj,
            'L_OPCOLAPF' => $this->L_OPCOLAPF,
            'L_OPCOLAHF' => $this->L_OPCOLAHF,
            'L_OPCOLAAdtnlD' => $this->L_OPCOLAAdtnlD,
            'L_OPCOLA' => $this->L_OPCOLA,
            'L_AdjTaxAdj' => $this->L_AdjTaxAdj,
            'L_AdjTaxPF' => $this->L_AdjTaxPF,
            'L_AdjTaxHF' => $this->L_AdjTaxHF,
            'L_AdjTaxAdtnlD' => $this->L_AdjTaxAdtnlD,
            'L_AdjTax' => $this->L_AdjTax,
            'L_AdjTaxSBAdj' => $this->L_AdjTaxSBAdj,
            'L_AdjTaxSBPF' => $this->L_AdjTaxSBPF,
            'L_AdjTaxSBHF' => $this->L_AdjTaxSBHF,
            'L_AdjTaxSBAdtnlD' => $this->L_AdjTaxSBAdtnlD,
            'L_AdjTaxSB' => $this->L_AdjTaxSB,
            'L_ALWOPCOLAAdj' => $this->L_ALWOPCOLAAdj,
            'L_ALWOPCOLAPF' => $this->L_ALWOPCOLAPF,
            'L_ALWOPCOLAHF' => $this->L_ALWOPCOLAHF,
            'L_ALWOPCOLAAdtnlD' => $this->L_ALWOPCOLAAdtnlD,
            'L_ALWOPCOLA' => $this->L_ALWOPCOLA,
            'L_ALWOPEFAAdj' => $this->L_ALWOPEFAAdj,
            'L_ALWOPEFAPF' => $this->L_ALWOPEFAPF,
            'L_ALWOPEFAHF' => $this->L_ALWOPEFAHF,
            'L_ALWOPEFAAdtnlD' => $this->L_ALWOPEFAAdtnlD,
            'L_ALWOPEFA' => $this->L_ALWOPEFA,
            'L_VaccineAdj' => $this->L_VaccineAdj,
            'L_VaccinePF' => $this->L_VaccinePF,
            'L_VaccineHF' => $this->L_VaccineHF,
            'L_VaccineAdtnlD' => $this->L_VaccineAdtnlD,
            'L_Vaccine' => $this->L_Vaccine,
        ]);

        $query->andFilterWhere(['like', 'SH08_LOANS.PrdID', $this->PrdID])
            ->andFilterWhere(['like', 'SH08_LOANS.EmpID', $this->EmpID])
            ->andFilterWhere(['like', 'campus', $this->campus])
            ->andFilterWhere(['like', 'FName', $this->fname])
            ->andFilterWhere(['like', 'LName', $this->lname])
            ->andFilterWhere(['like', 'SchoolCollege', $this->schoolCollege])
            ->andFilterWhere(['like', 'Department', $this->department]);

        return $dataProvider;
    }
}
