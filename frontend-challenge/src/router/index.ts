import { createRouter, createWebHistory } from 'vue-router'
import AmortizationList from '../views/AmortizationList.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'list',
      component: AmortizationList
    }
  ]
})

export default router
