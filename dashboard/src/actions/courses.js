// Action types
import { GET_COURSES } from './types'

// Others
import { api } from '../config/api'

// Login
export const getAllCourses = () => async dispatch => {
  try {
    const res = await api.get('/courses')
    dispatch({
      type: GET_COURSES,
      payload: res.data.courses
    })
  } catch (err) {
    console.log('error catch' + err)
  }
}
