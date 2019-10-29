// React & Redux:
import React from 'react'
import { useSelector } from 'react-redux'

// Alert:
const Alert = () => {
  // Alert state
  const alerts = useSelector(state => state.alert)

  return (
    alerts !== null && alerts.length > 0 && alerts.map(alert => (
      <div
        key={alert.id}
        className={`alert alert-${alert.type} alert-dismissible fade show`}
        role="alert"
      >
        <span className="alert-inner--icon">
          <i className="ni ni-like-2"></i>
        </span>
        <span className="alert-inner--text">{alert.msg}</span>
        <button
          type="button"
          class="close"
          data-dismiss="alert"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    ))
  )
}

export default Alert