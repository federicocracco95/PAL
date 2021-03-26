<template>
  <div class="dettagliopratica">
    <pre>{{dettagliopratica}}</pre>
  </div>
</template>
<script>
export default {
  name: "PraticheDettaglio",
  data() {
      return {
        user:{
          username: null,
        },
        dettagliopratica:{
          id: null,
          extraprofessional_incident: null,
          car_crash: null,
          trimester: null,
          ordinary_work_hours: null,
          disease_hours: null,
          cig_hours: null,
          holidays_and_remunerated_permissions_hours: null,
          other_remunerated_hours: null,
          total_hours: null,
          weekly_working_hours: null,
          disease_start_date: null,
          disease_end_date: null,
          total_disease_days: null,
          days_not_cleared_1: null,
          days_cleared_1: null,
          daily_amount_1: null,
          days_not_cleared_2: null,
          days_cleared_2: null,
          daily_amount_2: null,
          days_not_cleared_3: 3,
          days_cleared_3: null,
          daily_amount_3: null,
          days_not_cleared_4: null,
          days_cleared_4: null,
          daily_amount_4: null,
          days_not_cleared_5: null,
          days_cleared_5: null,
          daily_amount_5: null,
          days_not_cleared_6: null,
          days_cleared_6: null,
          daily_amount_6: null,
          total_final: null,
          created_at: null,
          updated_at: null,
          status: null,
          creator_id: null,
          employee_id: null,
          company_id: null
        }
  
      };
  },
  props: {},
  async mounted() {

      let dettaglio = await this.$api.get("/diseaseform");
      this.dettagliopratica = dettaglio[0];

      this.user = JSON.parse(localStorage.getItem("user"));
  },
  methods: {
    
  },
};
</script>

