import Vue from 'vue'
import Vuex from 'vuex'
import createPersistedState from 'vuex-persistedstate'
import * as Cookies from 'js-cookie'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        token: null,
        userData: null,
        isUserLoggedIn: false
    },
    mutations: {
        setToken (state, token){
            state.token = token
            if (token) {
                state.isUserLoggedIn = true
            }
            else{
                state.isUserLoggedIn = false
            }
        },
        setUserData (state, userData){
            state.userData = userData
        }
    },
    actions: {
        setToken({commit},token){
            commit('setToken', token)
        },
        setUserData({commit},userData){
            commit('setUserData', userData)
        }
    },
    plugins: [createPersistedState({
        storage: {
            getItem: setToken => Cookies.get(setToken),
            setItem: (setToken, token) => Cookies.set(setToken, token, { expires: 3, secure: false }),
            setItem: (setUserData, userData) => Cookies.set(setUserData, userData, { expires: 3, secure: false }),
            setItem: (userStatus, isUserLoggedIn) => Cookies.set(userStatus, isUserLoggedIn, { expires: 3, secure: false }),
            removeItem: setToken => Cookies.remove(setToken)
          }
        })
    ]
})