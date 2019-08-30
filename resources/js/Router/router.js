import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Login from '../components/login/Login'
import Signup from '../components/login/Signup'
import Logout from '../components/login/Logout'
import Forum from '../components/forum/Forum'
import Create from '../components/forum/Create'
import Read from '../components/forum/Read'

const routes = [
  { 
  	path: '/login', 
  	component: Login 
  },
  { 
  	path: '/logout', 
  	component: Logout 
  },
  { 
  	path: '/signup', 
  	component: Signup 
  },
  { 
  	path: '/forum',
  	name: 'forum', 
  	component: Forum 
  },
  { 
  	path: '/ask',
  	name: 'ask', 
  	component: Create 
  },
  { 
  	path: '/question/:slug',
  	name: 'read', 
  	component: Read 
  }
]


const router = new VueRouter({
  routes, // short for `routes: routes`
  mode : 'history'
})

export default router