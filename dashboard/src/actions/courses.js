// Action types
import { GET_COURSES, SET_LOADING, REMOVE_LOADING } from './types'

// Actions
import { setAlert } from '../actions/alert'

// Others
import { api } from '../config/api'

// Get all courses
export const getAllCourses = () => async dispatch => {
  dispatch({ type: SET_LOADING })
  try {
    const res = await api.get('/course9u1bd2u9d')
    dispatch({
      type: GET_COURSES,
      payload: res.data.courses
    })
  } catch (err) {
    dispatch(setAlert('Um erro inesperado ocorreu', 'danger'))
    dispatch({ type: REMOVE_LOADING })
  }
}
